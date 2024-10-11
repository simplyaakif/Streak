<?php

    namespace App\Filament\Resources\ExpenseResource\Pages;

    use App\Filament\Resources\ExpenseResource;
    use Filament\Pages\Actions\CreateAction;
    use Filament\Resources\Pages\ListRecords;

    class ListExpenses extends ListRecords {

        protected static string $resource = ExpenseResource::class;

        protected function getHeaderActions(): array
        {
            return [
                CreateAction::make(),
            ];
        }
    }
