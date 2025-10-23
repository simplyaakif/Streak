<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\BatchResource\Pages\ListBatches;
use App\Filament\Resources\BatchResource\Pages\CreateBatch;
use App\Filament\Resources\BatchResource\Pages\EditBatch;
use App\Filament\Resources\BatchResource\Pages;
use App\Filament\Resources\BatchResource\RelationManagers;
use App\Models\Batch;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BatchResource extends Resource
{
    protected static ?string $model = Batch::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-inbox';
    protected static ?int $navigationSort =5;

    protected static string | \UnitEnum | null $navigationGroup = 'Academic Management';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('limit')->numeric(),
                TextInput::make('session_duration'),
                TextInput::make('description'),
                Select::make('course_id')
                ->relationship('course','title'),
                TimePicker::make('time')->withoutSeconds(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                ToggleColumn::make('is_sale_skip'),
                TextColumn::make('course.title'),
                TextColumn::make('limit'),
                TextColumn::make('time'),
                TextColumn::make('session_duration'),
                TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => ListBatches::route('/'),
            'create' => CreateBatch::route('/create'),
            'edit' => EditBatch::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
