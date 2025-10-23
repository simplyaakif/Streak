<?php

    namespace App\Livewire\Student\Course;

use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Action;
use App\Models\HomeTask;
use App\Models\Lesson;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Component;

class Home extends Component implements HasTable, HasActions, HasSchemas {

    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithSchemas;

    public $batch_id;
    public $session_start_date;
    public $session_end_date;

    public function mount()
    {

    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                HomeTask::query()
                    ->where('batch_id', $this->batch_id)
                    ->whereBetween('created_at', [
                        carbon($this->session_start_date)->subDays(7),
                        carbon($this->session_end_date)->addDays(7),
                    ])
                    ->latest()
            )
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('employee.name')
                    ->label('Instructor'),
                TextColumn::make('due_date_time')->dateTime('h:i A D d-M-Y'),
                TextColumn::make('created_at')->dateTime('D d-M-Y')->sortable(),
            ])
            ->recordActions([
                Action::make('view')
                    ->url(fn (HomeTask $record): string => route('student.course.home.lesson.show', $record->id))
                    ->openUrlInNewTab()
            ]);
    }

        public function render()
        {
            return view('livewire.student.course.home');
        }
    }
