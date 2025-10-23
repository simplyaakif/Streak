<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\StudentResource\Pages\ListStudents;
use App\Filament\Resources\StudentResource\Pages\CreateStudent;
use App\Filament\Resources\StudentResource\Pages\EditStudent;
use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-users';

    protected static string | \UnitEnum | null $navigationGroup ='Students Management';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name'),
                Textarea::make('father_name'),
                Textarea::make('gender'),
                Textarea::make('nationality'),
                DatePicker::make('date_of_birth'),
                Textarea::make('cnic_passport'),
                Textarea::make('mobile'),
                Textarea::make('email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('mobile'),
                TextColumn::make('father_name'),
                TextColumn::make('gender')
                ->extraAttributes(['class'=>'capitalize']),
                TextColumn::make('date_of_birth')
                    ->date(),
                TextColumn::make('user.name'),
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
            'index' => ListStudents::route('/'),
            'create' => CreateStudent::route('/create'),
            'edit' => EditStudent::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
