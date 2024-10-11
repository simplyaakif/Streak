<?php

namespace App\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Course $course;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.create');
    }

    public function submit()
    {
        $this->validate();

        $this->course->save();
        $this->syncMedia();

        return redirect()->route('admin.courses.index');
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

    protected function rules(): array
    {
        return [
            'mediaCollections.course_featured_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.course_featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'course.title' => [
                'string',
                'required',
            ],
            'course.description' => [
                'string',
                'nullable',
            ],
            'course.price' => [
                'numeric',
                'required',
            ],
            'course.duration' => [
                'string',
                'required',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->course->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
