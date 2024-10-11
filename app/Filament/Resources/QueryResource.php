<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QueryResource\Pages;
use App\Filament\Resources\QueryResource\RelationManagers;
use App\Models\Query;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QueryResource extends Resource
{
    protected static ?string $model = Query::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationGroup='Query Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('name'),
                Forms\Components\Textarea::make('mobile'),
                Forms\Components\Textarea::make('email'),
                Forms\Components\Textarea::make('address'),
                Forms\Components\TextInput::make('staff_user_id'),
                Forms\Components\Textarea::make('remarks')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('telephone'),
                Forms\Components\Textarea::make('p_timings'),
                Forms\Components\Textarea::make('reference'),
                Forms\Components\TextInput::make('contact_type'),
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
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
