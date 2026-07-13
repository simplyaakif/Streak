<?php

namespace App\Filament\Student\Resources\Fees\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;

class FeesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
//                TextColumn::make('id')->label('ID'),
                TextColumn::make('course.title')->label('Course Name'),
                TextColumn::make('amount')->label('Fee Amount')->suffix(' Rs'),
                TextColumn::make('due_date')->label('Due Date')->date('d-F-Y'),
                TextColumn::make('paid_on')->label('Paid On')->date('d-F-Y'),
                TextColumn::make('account.title')->label('Payment Channel'),
                IconColumn::make('is_paid')
                    ->boolean()
                    ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
//                ViewAction::make(),
//                EditAction::make(),
            ])
            ->headerActions([])
            ->toolbarActions([
//                BulkActionGroup::make([
//                    DeleteBulkAction::make(),
//                ]),
            ]);
    }
}
