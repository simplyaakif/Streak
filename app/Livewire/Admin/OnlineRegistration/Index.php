<?php

    namespace App\Livewire\Admin\OnlineRegistration;

    use App\Models\Campus;
    use App\Models\Course;
    use App\Models\OnlineRegistration;
    use App\Models\User;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Enums\FiltersLayout;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\SelectFilter;
    use Filament\Tables\Table;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class Index extends Component implements HasTable,HasForms {
        use InteractsWithTable,InteractsWithForms;


        public function table(Table $table): Table
        {
            return $table
                ->query(OnlineRegistration::query()->with('courses')->latest())
                ->columns([
                TextColumn::make('name')->searchable(),
//                TextColumn::make('father_name'),
                TextColumn::make('pakistan_mobile')->label('Mobile Number'),
                TextColumn::make('whatsapp_mobile')->label('Whatsapp Number'),
                TextColumn::make('courses')->view('admin.filament.tables.columns.courses'),
                TextColumn::make('campus.name')->label('Campus'),
                TextColumn::make('ace_reference')->label('Reference'),
                TextColumn::make('mode_of_learning')->label('Learning Type'),
                TextColumn::make('created_at')->since(),
            ])->filters([
                SelectFilter::make('campus_id')
                    ->label('Campus')
                    ->options(Campus::all()->pluck('name','id')),
                SelectFilter::make('course')
                    ->label('Course')
                    ->relationship('courses','title')
                    ->options(Course::all()->pluck('title','id')),
                SelectFilter::make('mode_of_learning')
                    ->label('Mode')
                    ->options([
                        'In Campus'=>'On-Campus',
                        'Online'=>'Online'
                    ])
            ], layout: FiltersLayout::AboveContent)
                ->actions([
//                    Action::make('updateAuthor')
//                        ->mountUsing(fn (ComponentContainer $form, User $record) => $form->fill([
//                            'authorId' => $record->author->id,
//                        ]))
//                        ->action(function (User $record, array $data): void {
//                            $record->author()->associate($data['authorId']);
//                            $record->save();
//                        })
//                        ->form([
//                            Select::make('authorId')
//                                ->label('Author')
//                                ->options(User::query()->pluck('name', 'id'))
//                                ->required(),
//                        ]),
                ]);
        }

        public function render()
        {
            return view('livewire.admin.online-registration.index');
        }
    }
