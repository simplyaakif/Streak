<?php

namespace App\Filament\Resources\WhatsappResponses\Tables;

use App\Models\WhatsappResponse;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class WhatsappResponsesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->badge()
                    ->color('primary')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('association')
                    ->label('Associated With')
                    ->badge()
                    ->color(fn (string $state): string => str_starts_with($state, 'Course') ? 'success' : 'warning')
                    ->getStateUsing(function (WhatsappResponse $record): string {
                        $courses = $record->courses;
                        if ($courses->isNotEmpty()) {
                            return 'Course: ' . $courses->pluck('title')->join(', ');
                        }

                        $batches = $record->batches;
                        if ($batches->isNotEmpty()) {
                            return 'Batch: ' . $batches->pluck('title')->join(', ');
                        }

                        return '—';
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('type')
                    ->options(
                        fn (): array => WhatsappResponse::query()
                            ->distinct()
                            ->pluck('type', 'type')
                            ->toArray()
                    ),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
