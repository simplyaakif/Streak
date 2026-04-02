<?php

namespace App\Filament\Resources\WhatsappResponses\Schemas;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class WhatsappResponseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required()
                    ->maxLength(255),

                Builder::make('content')
                    ->blocks([
                        Builder\Block::make('text')
                            ->label('Text')
                            ->schema([
                                Textarea::make('message')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('delay')
                                    ->numeric()
                                    ->suffix('ms'),
                            ]),
                        Builder\Block::make('media')
                            ->label('Media')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('file')
                                    ->collection('whatsapp_response_media')
                                    ->columnSpanFull(),
                                TextInput::make('caption'),
                                TextInput::make('delay')
                                    ->numeric()
                                    ->suffix('ms'),
                            ]),
                    ])
                    ->columnSpanFull(),

                Select::make('association_type')
                    ->label('Associate With')
                    ->options(['course' => 'Course', 'batch' => 'Batch'])
                    ->dehydrated(false)
                    ->live()
                    ->afterStateUpdated(function (Set $set): void {
                        $set('courses', []);
                        $set('batches', []);
                    })
                    ->afterStateHydrated(function (Select $component, $record): void {
                        if (! $record) {
                            return;
                        }

                        if ($record->courses()->exists()) {
                            $component->state('course');
                        } elseif ($record->batches()->exists()) {
                            $component->state('batch');
                        }
                    })
                    ->columnSpanFull(),

                Select::make('courses')
                    ->relationship('courses', 'title')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->visible(fn (Get $get): bool => $get('association_type') === 'course')
                    ->columnSpanFull(),

                Select::make('batches')
                    ->relationship('batches', 'title')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->visible(fn (Get $get): bool => $get('association_type') === 'batch')
                    ->columnSpanFull(),
            ]);
    }
}
