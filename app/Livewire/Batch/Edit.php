<?php

namespace App\Livewire\Batch;

use App\Models\Batch;
use App\Models\Course;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Batch $batch;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Batch $batch)
    {
        $this->batch = $batch;
        $this->initListsForFields();
        $this->mediaCollections = [
            'batch_batch_content' => $batch->batch_content,

            'batch_featured_image' => $batch->featured_image,
        ];
    }

    public function render()
    {
        return view('livewire.batch.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->batch->save();
        $this->syncMedia();

        return redirect()->route('admin.batches.index');
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
            'batch.title' => [
                'string',
                'required',
            ],
            'batch.limit' => [
                'string',
                'nullable',
            ],
            'batch.course_id' => [
                'integer',
                'exists:courses,id',
                'required',
            ],
            'mediaCollections.batch_batch_content' => [
                'array',
                'nullable',
            ],
            'mediaCollections.batch_batch_content.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'batch.time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'batch.description' => [
                'string',
                'nullable',
            ],
            'mediaCollections.batch_featured_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.batch_featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['course'] = Course::pluck('title', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->batch->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
