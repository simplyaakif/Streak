<?php

    namespace App\Livewire\Student\Course;

    use Filament\Actions\Contracts\HasActions;
    use Filament\Actions\Concerns\InteractsWithActions;
    use Filament\Actions\Action;
    use App\Models\Lesson;
    use Carbon\Carbon;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Table;
    use Filament\Schemas\Concerns\InteractsWithSchemas;
    use Filament\Schemas\Contracts\HasSchemas;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class ClassLesson extends Component implements HasTable, HasActions, HasSchemas {

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
                        Lesson::query()->where('batch_id', $this->batch_id)
                            ->whereBetween('date', [
                                Carbon::parse($this->session_start_date)->subDays(7),
                                Carbon::parse($this->session_end_date)->addDays(7),
                            ])
                    )
                    ->columns([
                        TextColumn::make('title'),
                        TextColumn::make('short_description'),
                        TextColumn::make('date')->date('D d-M-Y'),
                    ])
                    ->recordActions([
                        Action::make('view')
                            ->url(fn (Lesson $record): string => route('student.course.class.lesson.show', $record->id))
                            ->openUrlInNewTab()
                    ])
                    ->queryStringIdentifier('class-lesson');
            }
            public function render()
            {
                return view('livewire.admin.filament.recovery.recovery-index');
            }
        }
