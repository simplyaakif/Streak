<?php

    namespace App\Filament\Resources\LessonResource\Pages;

    use App\Filament\Resources\LessonResource;
    use Filament\Pages\Actions\DeleteAction;
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
