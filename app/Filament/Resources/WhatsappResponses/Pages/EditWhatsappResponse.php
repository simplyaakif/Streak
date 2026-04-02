<?php

namespace App\Filament\Resources\WhatsappResponses\Pages;

use App\Filament\Resources\WhatsappResponses\WhatsappResponseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWhatsappResponse extends EditRecord
{
    protected static string $resource = WhatsappResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
