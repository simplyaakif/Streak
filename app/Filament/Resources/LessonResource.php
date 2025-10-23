<?php

    namespace App\Filament\Resources;

    use Filament\Schemas\Schema;
    use App\Filament\Resources\LessonResource\Pages\ListLessons;
    use App\Filament\Resources\LessonResource\Pages\CreateLesson;
    use App\Filament\Resources\LessonResource\Pages\EditLesson;
    use App\Filament\Resources\LessonResource\Pages;
    use App\Models\Lesson;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Placeholder;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Resources\Resource;
    use Filament\Tables\Table;
    use Filament\Tables\Columns\TextColumn;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;

    class LessonResource extends Resource {

        protected static ?string $model = Lesson::class;

        protected static ?string $slug = 'lessons';

        protected static ?string $recordTitleAttribute = 'title';

        public static function form(Schema $schema): Schema
        {
            return $schema->components([
                                     TextInput::make('title')->required(),

                                     TextInput::make('short_description')->required(),

                                     TextInput::make('long_description')->required(),

                                     DatePicker::make('date'),

                                     Select::make('user_id')->relationship('user', 'name')->searchable()->required(),

                                     TextInput::make('batch_id')->required()->integer(),

                                     Placeholder::make('created_at')->label('Created Date')->content(fn(?Lesson $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                                     Placeholder::make('updated_at')->label('Last Modified Date')->content(fn(?Lesson $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
                                 ]);
        }

        public static function table(Table $table): Table
        {
            return $table->columns([
                                       TextColumn::make('title')->searchable()->sortable(),

                                       TextColumn::make('short_description'),

                                       TextColumn::make('long_description'),

                                       TextColumn::make('date')->date(),

                                       TextColumn::make('user.name')->searchable()->sortable(),

                                       TextColumn::make('batch_id'),
                                   ]);
        }

        public static function getPages(): array
        {
            return [
                'index' => ListLessons::route('/'),
                'create' => CreateLesson::route('/create'),
                'edit' => EditLesson::route('/{record}/edit'),
            ];
        }

        public static function getGlobalSearchEloquentQuery(): Builder
        {
            return parent::getGlobalSearchEloquentQuery()->with(['user']);
        }

        public static function getGloballySearchableAttributes(): array
        {
            return [
                'title',
                'user.name'
            ];
        }

        public static function getGlobalSearchResultDetails(Model $record): array
        {
            $details = [];

            if($record->user) {
                $details['User'] = $record->user->name;
            }

            return $details;
        }
    }
