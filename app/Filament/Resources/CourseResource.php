<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\CourseResource\Pages\ListCourses;
use App\Filament\Resources\CourseResource\Pages\CreateCourse;
use App\Filament\Resources\CourseResource\Pages\EditCourse;
use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-book-open';

    protected static string | \UnitEnum | null $navigationGroup = 'Academic Management';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('description'),
                TextInput::make('price')
                    ->numeric(),
                TextInput::make('duration'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('price')
                    ->prefix('PKR ')
                    ->sortable(),
                TextColumn::make('duration')
                    ->badge()
                    ->color('gray')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('duration')
                    ->options(fn (): array => Course::query()->distinct()->pluck('duration', 'duration')->toArray()),
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['created_from'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '>=', $v))
                            ->when($data['created_until'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '<=', $v));
                    }),
            ])
            ->filtersFormColumns(3)
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
            'index' => ListCourses::route('/'),
            'create' => CreateCourse::route('/create'),
            'edit' => EditCourse::route('/{record}/edit'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
