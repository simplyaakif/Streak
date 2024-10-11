<?php

    namespace App\Livewire\Admin\Filament\Classroom;

    use App\Models\StudentAttendance as SA;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Contracts\View\View;
    use Livewire\Component;

    class StudentAttendance extends Component implements HasForms, HasTable {

        use InteractsWithForms,InteractsWithTable;

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
