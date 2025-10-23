<?php

namespace App\Filament\Resources\BatchStudentResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\BatchStudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatchStudent extends EditRecord
{
    protected static string $resource = BatchStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
