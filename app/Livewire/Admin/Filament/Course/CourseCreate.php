<?php

namespace App\Livewire\Admin\Filament\Course;

use App\Models\Course;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Livewire\Component;

class CourseCreate extends Component implements HasForms, HasActions
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
                SpatieMediaLibraryFileUpload::make('featured_image')
                    ->collection('course_featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->maxSize(2048),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->maxLength(255),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('PKR'),
                TextInput::make('duration')
                    ->required(),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $course = new Course();
        $course->title       = $data['title'];
        $course->description = $data['description'] ?? null;
        $course->price       = $data['price'];
        $course->duration    = $data['duration'];
        $course->save();

        $this->form->model($course)->saveRelationships();

        Notification::make()
            ->title('Course created successfully')
            ->success()
            ->send();

        $this->redirectRoute('admin.courses.index');
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.filament.course.course-create');
    }
}
