<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecoveryResource\Pages;
use App\Filament\Resources\RecoveryResource\RelationManagers;
use App\Models\Batch;
use App\Models\Recovery;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class RecoveryResource extends Resource
{
    protected static ?string $model = Recovery::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationGroup = 'Finance Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('batch_student_id')
                    ->required(),
                Forms\Components\TextInput::make('batch_id')
                    ->required(),
                Forms\Components\TextInput::make('student_id')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required(),
                Forms\Components\DatePicker::make('due_date')
                    ->required(),
                Forms\Components\Toggle::make('is_paid')
                    ->required(),
                Forms\Components\DatePicker::make('paid_on'),
                Forms\Components\TextInput::make('account_id'),
                Forms\Components\TextInput::make('slip_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('course_id')
                    ->required(),
                Forms\Components\TextInput::make('campus_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('batch.title')->searchable(),
                Tables\Columns\TextColumn::make('student.name')->searchable(),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('due_date')
                    ->date(),
                Tables\Columns\BooleanColumn::make('is_paid'),
                Tables\Columns\TextColumn::make('paid_on')
                    ->searchable()
                    ->date(),
                Tables\Columns\TextColumn::make('account.title'),
                Tables\Columns\TextColumn::make('slip_number'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                          Filter::make('due_date')
                              ->form([
                                         DatePicker::make('due_from'),
                                         DatePicker::make('due_until'),
                                     ])
                              ->query(function (Builder $query, array $data): Builder {
                                  return $query
                                      ->when(
                                          $data['due_from'],
                                          fn (Builder $query, $date): Builder => $query->whereDate('due_date', '>=', $date),
                                      )
                                      ->when(
                                          $data['due_until'],
                                          fn (Builder $query, $date): Builder => $query->whereDate('due_date', '<=', $date),
                                      );
                              }),
                          Filter::make('paid_on')
                              ->form([
                                         DatePicker::make('paid_from'),
                                         DatePicker::make('paid_until'),
                                     ])
                              ->query(function (Builder $query, array $data): Builder {
                                  return $query
                                      ->when(
                                          $data['paid_from'],
                                          fn (Builder $query, $date): Builder => $query->whereDate('paid_on', '>=', $date),
                                      )
                                      ->when(
                                          $data['paid_until'],
                                          fn (Builder $query, $date): Builder => $query->whereDate('paid_on', '<=', $date),
                                      );
                              }),
                Tables\Filters\SelectFilter::make('is_paid')
                    ->options([
                        '0'=>'No',
                        '1'=>'Yes'
                              ]),
                SelectFilter::make('batch_id')->label('Batch')
                    ->options(Batch::all()->pluck('title','id')),
            ],\Filament\Tables\Enums\FiltersLayout::AboveContent)
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecoveries::route('/'),
            'create' => Pages\CreateRecovery::route('/create'),
            'edit' => Pages\EditRecovery::route('/{record}/edit'),
        ];
    }
}
