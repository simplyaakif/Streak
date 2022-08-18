<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecoveryResource\Pages;
use App\Filament\Resources\RecoveryResource\RelationManagers;
use App\Models\Recovery;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecoveryResource extends Resource
{
    protected static ?string $model = Recovery::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

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
                Tables\Columns\TextColumn::make('batch_student_id'),
                Tables\Columns\TextColumn::make('batch.title'),
                Tables\Columns\TextColumn::make('student.name'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('due_date')
                    ->date(),
                Tables\Columns\BooleanColumn::make('is_paid'),
                Tables\Columns\TextColumn::make('paid_on')
                    ->date(),
                Tables\Columns\TextColumn::make('account_id'),
                Tables\Columns\TextColumn::make('slip_number'),
                Tables\Columns\TextColumn::make('course_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('campus_id'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
