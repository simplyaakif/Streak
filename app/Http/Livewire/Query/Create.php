<?php

namespace App\Http\Livewire\Query;

use App\Models\Course;
use App\Models\Query;
use App\Models\User;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Query $query;
    public  $courses;
    public $users;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Query $query)
    {
        $this->query = $query;
        $this->courses= Course::all();
        $this->users= User::all();
    }

    public function render()
    {
        return view('livewire.query.create');
    }

    public function submit()
    {
        $this->validate();

        $this->query->save();
        $this->syncMedia();

        return redirect()->route('admin.queries.index');
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
            'mediaCollections.query_dp' => [
                'array',
                'nullable',
            ],
            'mediaCollections.query_dp.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'query.name' => [
                'string',
                'required',
            ],
            'query.mobile' => [
                'string',
                'required',
            ],
            'query.email' => [
                'email:rfc',
                'nullable',
            ],
            'query.address' => [
                'string',
                'nullable',
            ],
            'query.p_timings' => [
                'string',
                'nullable',
            ],
            'query.remarks' => [
                'string',
                'nullable',
            ],
            'query.telephone' => [
                'string',
                'nullable',
            ],
            'query.reference' => [
                'string',
                'nullable',
            ],
            'query.staff_user_id' => [
                'numeric',
                'required',
            ],
            'query.created_at'=>[
                'string','nullable'
            ]


        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->query->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
