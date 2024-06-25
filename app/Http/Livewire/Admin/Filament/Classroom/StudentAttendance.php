<?php

    namespace App\Http\Livewire\Admin\Filament\Classroom;

    use App\Models\StudentAttendance as SA;
    use Filament\Tables;
    use Illuminate\Contracts\View\View;
    use Livewire\Component;

    class StudentAttendance extends Component implements Tables\Contracts\HasTable {

        use Tables\Concerns\InteractsWithTable;

        protected function getTableQuery()
        {
            return SA::query();
        }

        protected function getTableColumns(): array
        {
            return [];
        }

        protected function getTableFilters(): array
        {
            return [];
        }

        protected function getTableActions(): array
        {
            return [];
        }

        protected function getTableBulkActions(): array
        {
            return [];
        }

        public function render(): View
        {
            return view('livewire.admin.filament.classroom.student-attendance');
        }
    }
