<?php

    namespace App\Http\Livewire\Student\Course;

use App\Models\HomeTask;
use App\Models\Lesson;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class Home extends Component implements HasTable {

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
                TextColumn::make('title')->searchable(),
                TextColumn::make('employee.name')
                    ->label('Instructor'),
                TextColumn::make('due_date_time')->dateTime('h:i A D d-M-Y'),
                TextColumn::make('created_at')->dateTime('D d-M-Y')->sortable(),
            ];
        }
        protected function getTableActions(): array
        {
            return [
                Action::make('view')
                    ->url(fn (HomeTask $record): string => route('student.course.home.lesson.show', $record->id))
                    ->openUrlInNewTab()
            ];
        }

        protected function getTableQuery(): Builder|Relation
        {
            return HomeTask::query()->where('batch_id',$this->batch_id)->whereBetween('created_at',[
                carbon($this->session_start_date)->subDays(7),
                carbon($this->session_end_date)->addDays(7),

            ])->latest();
        }

        public function render()
        {
            return view('livewire.student.course.home');
        }
    }
