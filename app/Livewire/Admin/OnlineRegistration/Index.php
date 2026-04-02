<?php

    namespace App\Livewire\Admin\OnlineRegistration;

    use Filament\Actions\Contracts\HasActions;
    use Filament\Actions\Concerns\InteractsWithActions;
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
use Filament\Schemas\Concerns\InteractsWithSchemas;
    use Filament\Tables\Contracts\HasTable;
use Filament\Schemas\Contracts\HasSchemas;
    use Filament\Tables\Enums\FiltersLayout;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\SelectFilter;
    use Filament\Tables\Table;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class Index extends Component implements HasTable, HasSchemas,HasForms, HasActions {
        use InteractsWithActions;
        use InteractsWithTable,InteractsWithForms;


        public function table(Table $table): Table
        {
            return $table
                ->query(OnlineRegistration::query()->with('courses')->latest())
                ->columns([
                TextColumn::make('name')->searchable()->toggleable(),
                TextColumn::make('father_name')->label('Father Name')->searchable()->toggleable(),
                TextColumn::make('pakistan_mobile')->label('Mobile Number')->toggleable(),
                TextColumn::make('whatsapp_mobile')->label('Whatsapp Number')->toggleable(),
                TextColumn::make('email')->label('Email')->searchable()->toggleable(),
                TextColumn::make('pak_cnic')->label('CNIC')->searchable()->toggleable(),
                TextColumn::make('passport_number')->label('Passport Number')->toggleable(),
                TextColumn::make('address')->label('Address')->toggleable(),
                TextColumn::make('courses')->view('admin.filament.tables.columns.courses')->toggleable(),
                TextColumn::make('campus.name')->label('Campus')->toggleable(),
                TextColumn::make('ace_reference')->label('Reference')->toggleable(),
                TextColumn::make('mode_of_learning')->label('Learning Type')->toggleable(),
                TextColumn::make('created_at')->since()->toggleable(),
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
                ->recordActions([
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
