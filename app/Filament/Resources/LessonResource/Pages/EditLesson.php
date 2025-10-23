<?php

    namespace App\Filament\Resources\LessonResource\Pages;

    use Filament\Actions\DeleteAction;
    use App\Filament\Resources\LessonResource;
    use Filament\Resources\Pages\EditRecord;

    class EditLesson extends EditRecord {

        protected static string $resource = LessonResource::class;

        protected function getHeaderActions(): array
        {
            return [
                DeleteAction::make(),
            ];
        }
    }
