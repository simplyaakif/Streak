<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\BatchStudentResource\Pages\ListBatchStudents;
use App\Filament\Resources\BatchStudentResource\Pages\CreateBatchStudent;
use App\Filament\Resources\BatchStudentResource\Pages\EditBatchStudent;
use App\Filament\Resources\BatchStudentResource\Pages;
use App\Filament\Resources\BatchStudentResource\RelationManagers;
use App\Models\BatchStudent;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BatchStudentResource extends Resource
{
    protected static ?string $model = BatchStudent::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel ='Admissions';
    protected static string | \UnitEnum | null $navigationGroup ='Students Management';


    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('batch_id'),
                TextInput::make('student_id'),
                DatePicker::make('session_start_date'),
                DatePicker::make('session_end_date'),
                Toggle::make('batch_status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->searchable(),
                TextColumn::make('batch.title')->searchable(),
                TextColumn::make('session_start_date')
                    ->date(),
                TextColumn::make('session_end_date')
                    ->date(),
                BadgeColumn::make('batch_status'),
                TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime(),
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
            'index' => ListBatchStudents::route('/'),
            'create' => CreateBatchStudent::route('/create'),
            'edit' => EditBatchStudent::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
