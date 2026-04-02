<?php

namespace App\Filament\Resources\WhatsappResponses\Pages;

use App\Filament\Resources\WhatsappResponses\WhatsappResponseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWhatsappResponses extends ListRecords
{
    protected static string $resource = WhatsappResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
