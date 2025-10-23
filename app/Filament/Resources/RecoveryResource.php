<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\RecoveryResource\Pages\ListRecoveries;
use App\Filament\Resources\RecoveryResource\Pages\CreateRecovery;
use App\Filament\Resources\RecoveryResource\Pages\EditRecovery;
use App\Filament\Resources\RecoveryResource\Pages;
use App\Filament\Resources\RecoveryResource\RelationManagers;
use App\Models\Batch;
use App\Models\Recovery;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class RecoveryResource extends Resource
{
    protected static ?string $model = Recovery::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-banknotes';

    protected static string | \UnitEnum | null $navigationGroup = 'Finance Management';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('batch_student_id')
                    ->required(),
                TextInput::make('batch_id')
                    ->required(),
                TextInput::make('student_id')
                    ->required(),
                TextInput::make('amount')
                    ->required(),
                DatePicker::make('due_date')
                    ->required(),
                Toggle::make('is_paid')
                    ->required(),
                DatePicker::make('paid_on'),
                TextInput::make('account_id'),
                TextInput::make('slip_number')
                    ->maxLength(255),
                TextInput::make('course_id')
                    ->required(),
                TextInput::make('campus_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('batch.title')->searchable(),
                TextColumn::make('student.name')->searchable(),
                TextColumn::make('amount'),
                TextColumn::make('due_date')
                    ->date(),
                BooleanColumn::make('is_paid'),
                TextColumn::make('paid_on')
                    ->searchable()
                    ->date(),
                TextColumn::make('account.title'),
                TextColumn::make('slip_number'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                          Filter::make('due_date')
                              ->schema([
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
                              ->schema([
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
                SelectFilter::make('is_paid')
                    ->options([
                        '0'=>'No',
                        '1'=>'Yes'
                              ]),
                SelectFilter::make('batch_id')->label('Batch')
                    ->options(Batch::all()->pluck('title','id')),
            ],FiltersLayout::AboveContent)
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
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
            'index' => ListRecoveries::route('/'),
            'create' => CreateRecovery::route('/create'),
            'edit' => EditRecovery::route('/{record}/edit'),
        ];
    }
}
