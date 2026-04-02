<?php

namespace App\Livewire\Admin\Filament\Course;

use App\Models\Course;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Grid;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CourseIndex extends Component implements HasForms, HasTable, HasActions
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Course::query()->withTrashed())
            ->columns([
                SpatieMediaLibraryImageColumn::make('featured_image')
                    ->collection('course_featured_image')
                    ->label('Image')
                    ->circular()
                    ->toggleable(),
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
                    ->date('d-M-Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('duration')
                    ->options(fn (): array => Course::query()->distinct()->pluck('duration', 'duration')->toArray()),
                Filter::make('created_at')
                    ->schema([
                        DatePicker::make('created_from'),
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['created_from'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '>=', $v))
                            ->when($data['created_until'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '<=', $v));
                    }),
            ])
            ->filtersFormColumns(3)
            ->recordActions([
                Action::make('view')
                    ->url(fn (Course $record): string => route('admin.courses.show', $record))
                    ->icon('heroicon-o-eye')
                    ->color('info'),
                Action::make('edit')
                    ->icon('heroicon-o-pencil')
                    ->color('success')
                    ->mountUsing(fn (Course $record, \Filament\Schemas\Schema $schema) => $schema->fill([
                        'title'       => $record->title,
                        'description' => $record->description,
                        'price'       => $record->price,
                        'duration'    => $record->duration,
                    ]))
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->columnSpanFull(),
                            TextInput::make('description')
                                ->maxLength(255)
                                ->columnSpanFull(),
                            TextInput::make('price')
                                ->required()
                                ->numeric()
                                ->prefix('PKR'),
                            TextInput::make('duration')
                                ->required(),
                            SpatieMediaLibraryFileUpload::make('featured_image')
                                ->collection('course_featured_image')
                                ->label('Featured Image')
                                ->image()
                                ->maxSize(2048)
                                ->columnSpanFull(),
                        ]),
                    ])
                    ->action(function (Course $record, array $data): void {
                        $record->title       = $data['title'];
                        $record->description = $data['description'] ?? null;
                        $record->price       = $data['price'];
                        $record->duration    = $data['duration'];
                        $record->save();

                        Notification::make()
                            ->title('Course updated successfully')
                            ->success()
                            ->send();
                    })
                    ->modalWidth('2xl'),
            ]);
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.filament.course.course-index');
    }
}
