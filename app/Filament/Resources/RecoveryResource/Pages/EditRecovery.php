<?php

namespace App\Filament\Resources\RecoveryResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\RecoveryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecovery extends EditRecord
{
    protected static string $resource = RecoveryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (array_key_exists('installment_number', $data)) {
            $data['meta'] = ['installment_number' => $data['installment_number']];
            unset($data['installment_number']);
        }

        return $data;
    }
}
