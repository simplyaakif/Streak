<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BatchStudentResource\Pages;
use App\Filament\Resources\BatchStudentResource\RelationManagers;
use App\Models\BatchStudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BatchStudentResource extends Resource
{
    protected static ?string $model = BatchStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel ='Admissions';
    protected static ?string $navigationGroup ='Students Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('batch_id'),
                Forms\Components\TextInput::make('student_id'),
                Forms\Components\DatePicker::make('session_start_date'),
                Forms\Components\DatePicker::make('session_end_date'),
                Forms\Components\Toggle::make('batch_status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')->searchable(),
                Tables\Columns\TextColumn::make('batch.title')->searchable(),
                Tables\Columns\TextColumn::make('session_start_date')
                    ->date(),
                Tables\Columns\TextColumn::make('session_end_date')
                    ->date(),
                Tables\Columns\BadgeColumn::make('batch_status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime(),
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
            'index' => Pages\ListBatchStudents::route('/'),
            'create' => Pages\CreateBatchStudent::route('/create'),
            'edit' => Pages\EditBatchStudent::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
