<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TagsColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\QueryResource\Pages\ListQueries;
use App\Filament\Resources\QueryResource\Pages\CreateQuery;
use App\Filament\Resources\QueryResource\Pages\EditQuery;
use App\Filament\Resources\QueryResource\Pages;
use App\Filament\Resources\QueryResource\RelationManagers;
use App\Models\Query;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class QueryResource extends Resource
{
    protected static ?string $model = Query::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-user-plus';
    protected static string | \UnitEnum | null $navigationGroup='Query Management';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name'),
                Textarea::make('mobile'),
                Textarea::make('email'),
                Textarea::make('address'),
                TextInput::make('staff_user_id'),
                Textarea::make('remarks')
                    ->maxLength(65535),
                Textarea::make('telephone'),
                Textarea::make('p_timings'),
                Textarea::make('reference'),
                TextInput::make('contact_type'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('mobile'),
                TextColumn::make('mobile'),
                TextColumn::make('entry_by'),
                TagsColumn::make('course_tags'),
                TextColumn::make('contact_type_label')
                ->label('Contact Via'),
                TextColumn::make('created_at')
                    ->dateTime('h:m d-M-Y')->sortable(),
            ])->defaultSort('created_at','desc')
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
            'index' => ListQueries::route('/'),
            'create' => CreateQuery::route('/create'),
            'edit' => EditQuery::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
