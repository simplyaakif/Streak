<?php

    namespace App\Livewire\Admin\Filament\Student;

    use App\Models\StudentAttendance;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class AttendanceShow extends Component implements HasForms,HasTable {

        use InteractsWithForms,InteractsWithTable;
        public $student_id;

        protected function getTableQuery(): Builder|Relation
        {
            return StudentAttendance::query()->where('student_id',$this->student_id);
        }

        protected function getTableColumns(): array
        {
            return[
                TextColumn::make('batch.title'),
                TextColumn::make('attendance_status'),
                TextColumn::make('day')->label('Day'),
                TextColumn::make('datetime')->dateTime('h:i d-M-Y')->label('Date'),
                TextColumn::make('employee.name')->label('Taken By'),

            ];
        }
        protected function getDefaultTableSortColumn(): ?string
        {
            return 'created_at';
        }

        protected function getDefaultTableSortDirection(): ?string
        {
            return 'desc';
        }

        public function render()
        {
            return view('livewire.admin.filament.student.attendance-show');
        }
    }
