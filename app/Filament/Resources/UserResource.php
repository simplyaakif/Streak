<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string | \UnitEnum | null $navigationGroup = 'Users Management';
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name')
                    ->maxLength(255),
                Textarea::make('email')
                    ->maxLength(255),
                DateTimePicker::make('email_verified_at'),
                Textarea::make('password')
                    ->maxLength(255),
                Textarea::make('is_staff')
                    ->maxLength(255),
                Textarea::make('avatar')
                    ->maxLength(255),
                Textarea::make('messenger_color')
                    ->maxLength(255),
                Toggle::make('dark_mode'),
                Toggle::make('active_status'),
                Toggle::make('is_super')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('email_verified_at')
                    ->dateTime(),
                TextColumn::make('is_staff'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
                TextColumn::make('deleted_at')
                    ->dateTime(),
                TextColumn::make('avatar'),
                TextColumn::make('messenger_color'),
                BooleanColumn::make('dark_mode'),
                BooleanColumn::make('active_status'),
                BooleanColumn::make('is_super'),
            ])
            ->filters([
                //
            ])
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
