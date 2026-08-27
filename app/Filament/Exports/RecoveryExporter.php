<?php

namespace App\Filament\Exports;

use App\Models\Recovery;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class RecoveryExporter extends Exporter
{
    protected static ?string $model = Recovery::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('student.name')
                ->label('Student Name'),
            ExportColumn::make('student.mobile')
                ->label('Contact'),
            ExportColumn::make('student.father_name')
                ->label('Father Name'),
            ExportColumn::make('batch.title')
                ->label('Batch'),
            ExportColumn::make('due_date')
                ->label('Due Date'),
            ExportColumn::make('amount'),
            ExportColumn::make('is_paid')
                ->label('Is Paid'),
            ExportColumn::make('paid_on')
                ->label('Paid On'),
            ExportColumn::make('account.title')
                ->label('Account'),
            ExportColumn::make('slip_number')
                ->label('Slip Number'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your recovery export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
