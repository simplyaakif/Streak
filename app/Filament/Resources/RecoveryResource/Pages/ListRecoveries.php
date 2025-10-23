<?php

namespace App\Filament\Resources\RecoveryResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\RecoveryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecoveries extends ListRecords
{
    protected static string $resource = RecoveryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
