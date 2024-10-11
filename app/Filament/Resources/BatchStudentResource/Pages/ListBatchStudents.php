<?php

namespace App\Filament\Resources\BatchStudentResource\Pages;

use App\Filament\Resources\BatchStudentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatchStudents extends ListRecords
{
    protected static string $resource = BatchStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
