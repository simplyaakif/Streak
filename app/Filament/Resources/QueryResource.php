<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QueryResource\Pages;
use App\Filament\Resources\QueryResource\RelationManagers;
use App\Models\Query;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QueryResource extends Resource
{
    protected static ?string $model = Query::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup='Query Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('name')
                    ->maxLength(255),
                Forms\Components\Textarea::make('mobile')
                    ->maxLength(255),
                Forms\Components\Textarea::make('email')
                    ->maxLength(255),
                Forms\Components\Textarea::make('address'),
                Forms\Components\TextInput::make('staff_user_id'),
                Forms\Components\Textarea::make('remarks')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('telephone')
                    ->maxLength(255),
                Forms\Components\Textarea::make('p_timings')
                    ->maxLength(255),
                Forms\Components\Textarea::make('reference')
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_type'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('mobile'),
                TextColumn::make('entry_by'),
                Tables\Columns\TagsColumn::make('course_tags'),
                TextColumn::make('contact_type_label')
                ->label('Contact Via'),
                TextColumn::make('created_at')
                    ->dateTime('h:m d-M-Y')->sortable(),
            ])->defaultSort('created_at','desc')
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
            'index' => Pages\ListQueries::route('/'),
            'create' => Pages\CreateQuery::route('/create'),
            'edit' => Pages\EditQuery::route('/{record}/edit'),
        ];
    }
}
