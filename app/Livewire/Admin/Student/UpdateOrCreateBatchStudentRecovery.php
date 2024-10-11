<?php

    namespace App\Livewire\Admin\Student;

    use App\Models\BatchStudent;
    use Filament\Forms\Components\Repeater;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Livewire\Component;

    class UpdateOrCreateBatchStudentRecovery extends Component implements HasForms {

        use InteractsWithForms;

        public BatchStudent $batchStudent;

        public function mount(){
            $this->form->fill(
                $this->batchStudent->toArray(),
            );
        }
        protected function getFormSchema(): array
        {
            return [
                TextInput::make('amount'),
            //    Repeater::make('recoveries')
            //    ->relationship()
            //    ->schema([
            //    TextInput::make('amount')

            //             ])->columns(2)
            ];
        }

        public function render()
        {
            return view('livewire.admin.student.update-or-create-batch-student-recovery');
        }
    }
