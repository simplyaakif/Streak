<?php

    namespace App\Http\Livewire\Student\Course;

    use App\Models\Lesson;
    use Carbon\Carbon;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\TextColumn;
        use Filament\Tables\Concerns\InteractsWithTable;
        use Filament\Tables\Contracts\HasTable;
        use Illuminate\Database\Eloquent\Builder;
        use Illuminate\Database\Eloquent\Relations\Relation;
        use Livewire\Component;

        class ClassLesson extends Component implements HasTable {

            use InteractsWithTable;

            public $batch_id;
            public $session_start_date;
            public $session_end_date;

            public function mount()
            {

            }
            protected function getTableColumns(): array
            {
                return [
                    TextColumn::make('title'),
                    TextColumn::make('short_description'),
                    TextColumn::make('short_description'),
                    TextColumn::make('date')->date('D d-M-Y'),
                ];
            }
            protected function getTableQuery(): Builder|Relation
            {
                return Lesson::query()->where('batch_id',$this->batch_id)
                    ->whereBetween('date',[
                        Carbon::parse($this->session_start_date)->subDays(7),
                        Carbon::parse($this->session_end_date)->addDays(7),
                    ]);
            }
            protected function getTableActions(): array
            {
                return [
                    Action::make('view')
                        ->url(fn (Lesson $record): string => route('student.course.class.lesson.show', $record->id))
                        ->openUrlInNewTab()
//                        ->mountUsing(fn (ComponentContainer $form, Lesson $record) => $form->fill([
//                            'title' => $record->title,
//                            'short_description' => $record->short_description,
//                            'long_description' => $record->long_description,
//                        ]))
//                        ->form([
//                                   Grid::make(2)
//                                   ->schema([
//                                       TextInput::make('title')
//                                       ->disabled(),
//                                       TextInput::make('short_description')
//                                       ->disabled(),
//                                       Textarea::make('long_description')
//                                       ->disabled()->columnSpan(2),
//                                            ])
//                               ])
                ];
            }
            protected function getTableQueryStringIdentifier(): string
            {
                return 'class-lesson';
            }
            public function render()
            {
                return view('livewire.admin.filament.recovery.recovery-index');
            }
        }
