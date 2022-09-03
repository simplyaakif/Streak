<?php

    namespace App\Filament\Resources\ExpenseResource\Pages;

    use App\Filament\Resources\ExpenseResource;
    use Filament\Pages\Actions\DeleteAction;
    use Filament\Resources\Pages\EditRecord;

    class EditExpense extends EditRecord {

        protected static string $resource = ExpenseResource::class;

        protected function getActions(): array
        {
            return [
                DeleteAction::make(),
            ];
        }
    }
