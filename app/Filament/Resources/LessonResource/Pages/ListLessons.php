<?php

    namespace App\Filament\Resources\LessonResource\Pages;

    use App\Filament\Resources\LessonResource;
    use Filament\Pages\Actions\CreateAction;
    use Filament\Resources\Pages\ListRecords;

    class ListLessons extends ListRecords {

        protected static string $resource = LessonResource::class;

        protected function getActions(): array
        {
            return [
                CreateAction::make(),
            ];
        }
    }
