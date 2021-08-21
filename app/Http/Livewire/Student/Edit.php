<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Student $student;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Student $student)
    {
        $this->student = $student;
        $this->initListsForFields();
        $this->mediaCollections = [
            'student_dp' => $student->dp,

            'student_documents' => $student->documents,
        ];
    }

    public function render()
    {
        return view('livewire.student.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->student->save();
        $this->syncMedia();

        return redirect()->route('admin.students.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.student_dp' => [
                'array',
                'nullable',
            ],
            'mediaCollections.student_dp.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'student.name' => [
                'string',
                'nullable',
            ],
            'student.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'student.father_name' => [
                'string',
                'nullable',
            ],
            'student.gender' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['gender'])),
            ],
            'student.nationality' => [
                'string',
                'nullable',
            ],
            'student.date_of_birth' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'student.cnic_passport' => [
                'string',
                'nullable',
            ],
            'student.mobile' => [
                'string',
                'nullable',
            ],
            'student.email' => [
                'email:rfc',
                'nullable',
            ],
            'mediaCollections.student_documents' => [
                'array',
                'nullable',
            ],
            'mediaCollections.student_documents.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user']   = User::pluck('name', 'id')->toArray();
        $this->listsForFields['gender'] = $this->student::GENDER_SELECT;
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->student->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
