<?php

namespace App\Filament\Resources\RecoveryResource\Pages;

use App\Filament\Resources\RecoveryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRecovery extends CreateRecord
{
    protected static string $resource = RecoveryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (array_key_exists('installment_number', $data)) {
            $data['meta'] = ['installment_number' => $data['installment_number']];
            unset($data['installment_number']);
        }

        return $data;
    }
}
