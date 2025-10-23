<?php

namespace App\Filament\Resources\QueryResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\QueryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQueries extends ListRecords
{
    protected static string $resource = QueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
