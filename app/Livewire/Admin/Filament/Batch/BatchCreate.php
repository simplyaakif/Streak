<?php

namespace App\Livewire\Admin\Filament\Batch;

use App\Models\Batch;
use App\Models\Course;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Livewire\Component;

class BatchCreate extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Select::make('course_id')
                    ->label('Course')
                    ->options(Course::query()->pluck('title', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('limit')
                    ->numeric()
                    ->label('Student Limit'),
                TimePicker::make('time')
                    ->label('Class Time')
                    ->seconds(false),
                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('batch_content')
                    ->collection('batch_batch_content')
                    ->label('Batch Content')
                    ->multiple()
                    ->maxSize(2048)
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('featured_image')
                    ->collection('batch_featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->maxSize(2048),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $batch = new Batch();
        $batch->title       = $data['title'];
        $batch->course_id   = $data['course_id'];
        $batch->limit       = $data['limit'] ?? null;
        $batch->time        = $data['time'] ?? null;
        $batch->description = $data['description'] ?? null;
        $batch->save();

        $this->form->model($batch)->saveRelationships();

        Notification::make()
            ->title('Batch created successfully')
            ->success()
            ->send();

        $this->redirectRoute('admin.batches.index');
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.filament.batch.batch-create');
    }
}
