<?php

namespace App\Livewire\Admin\Filament\UsefulLinks;

use App\Models\UsefulLink;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UsefulLinksIndex extends Component implements HasForms, HasTable, HasActions
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(UsefulLink::query()->withoutGlobalScopes())
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
                    ->searchable()
                    ->limit(50)
                    ->url(fn(UsefulLink $record): string => $record->url)
                    ->openUrlInNewTab(),
                TextColumn::make('category')
                    ->badge()
                    ->color('primary')
                    ->searchable()
                    ->sortable(),
            ])
            ->defaultSort('category')
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('category')
                    ->options(
                        fn(): array => UsefulLink::query()
                            ->withoutTrashed()
                            ->distinct()
                            ->pluck('category', 'category')
                            ->toArray()
                    ),
            ],layout: FiltersLayout::AboveContent)
            ->headerActions([
                Action::make('create_link')
                    ->label('New Link')
                    ->icon(Heroicon::OutlinedPlus)
                    ->schema($this->getLinkFormSchema())
                    ->action(fn(array $data) => UsefulLink::create($data))
                    ->successNotificationTitle('Link created'),
            ])
            ->recordActions([
                Action::make('edit')
                    ->icon(Heroicon::OutlinedPencil)
                    ->mountUsing(fn(Schema $schema, UsefulLink $record) => $schema->fill([
                        'title' => $record->title,
                        'url' => $record->url,
                        'category' => $record->category,
                    ]))
                    ->schema($this->getLinkFormSchema())
                    ->action(fn(UsefulLink $record, array $data) => $record->update($data))
                    ->successNotificationTitle('Link updated'),
                Action::make('delete')
                    ->icon(Heroicon::OutlinedTrash)
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(fn(UsefulLink $record) => $record->delete()),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }

    private function getLinkFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->maxLength(255),
            TextInput::make('url')
                ->required()
                ->url()
                ->maxLength(500)
                ->columnSpanFull(),
            TextInput::make('category')
                ->required()
                ->maxLength(255),
        ];
    }

    public function render(): View
    {
        return view('livewire.admin.filament.useful-links.useful-links-index');
    }
}
