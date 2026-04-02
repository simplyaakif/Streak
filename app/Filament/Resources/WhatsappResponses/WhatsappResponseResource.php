<?php

namespace App\Filament\Resources\WhatsappResponses;

use App\Filament\Resources\WhatsappResponses\Pages\CreateWhatsappResponse;
use App\Filament\Resources\WhatsappResponses\Pages\EditWhatsappResponse;
use App\Filament\Resources\WhatsappResponses\Pages\ListWhatsappResponses;
use App\Filament\Resources\WhatsappResponses\Schemas\WhatsappResponseForm;
use App\Filament\Resources\WhatsappResponses\Tables\WhatsappResponsesTable;
use App\Models\WhatsappResponse;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class WhatsappResponseResource extends Resource
{
    protected static ?string $model = WhatsappResponse::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static string|UnitEnum|null $navigationGroup = 'Academic Management';

    protected static ?int $navigationSort = 10;

    public static function form(Schema $schema): Schema
    {
        return WhatsappResponseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WhatsappResponsesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWhatsappResponses::route('/'),
            'create' => CreateWhatsappResponse::route('/create'),
            'edit' => EditWhatsappResponse::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
