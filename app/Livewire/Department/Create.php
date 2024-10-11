<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Department $department;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Department $department)
    {
        $this->department = $department;
    }

    public function render()
    {
        return view('livewire.department.create');
    }

    public function submit()
    {
        $this->validate();

        $this->department->save();
        $this->syncMedia();

        return redirect()->route('admin.departments.index');
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
            'department.title' => [
                'string',
                'required',
            ],
            'mediaCollections.department_featured_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.department_featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'department.icon' => [
                'string',
                'nullable',
            ],
            'department.description' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->department->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
