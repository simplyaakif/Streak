<?php

namespace App\Filament\Resources\BatchResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\BatchResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatches extends ListRecords
{
    protected static string $resource = BatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
