<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\ExpenseResource\Pages;
    use App\Models\Expense;
    use Filament\Forms\Components\Checkbox;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Placeholder;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Resources\Form;
    use Filament\Resources\Resource;
    use Filament\Resources\Table;
    use Filament\Tables\Columns\TextColumn;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;

    class ExpenseResource extends Resource {

        protected static ?string $model = Expense::class;

        protected static ?string $slug = 'expenses';

        protected static ?string $recordTitleAttribute = 'id';

        protected static ?string $navigationGroup = 'Finance Management';

        public static function form(Form $form): Form
        {
            return $form->schema([
                                     Select::make('types')
                                     ->options(Expense::types),

                                     TextInput::make('amount'),


                                     DatePicker::make('paid_on'),

                                     Select::make('paid_by')->relationship('employee', 'name')->searchable(),

                                     TextInput::make('paid_to'),

                                     DatePicker::make('created_at'),

                                     Select::make('vendor_id')->relationship('vendor', 'name')->searchable(),

                                     DatePicker::make('due_date'),

                                     Placeholder::make('created_at')->label('Created Date')->content(fn(?Expense $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                                     Placeholder::make('updated_at')->label('Last Modified Date')->content(fn(?Expense $record): string => $record?->updated_at?->diffForHumans() ?? '-'),

                                     Checkbox::make('is_paid'),
                                 ]);
        }

        public static function table(Table $table): Table
        {
            return $table->columns([
                                       TextColumn::make('type'),

                                       TextColumn::make('amount'),

                                       TextColumn::make('is_paid'),

                                       TextColumn::make('paid_on')->date(),

                                       TextColumn::make('employee.name')->searchable()->sortable(),

                                       TextColumn::make('paid_to'),

                                       TextColumn::make('vendor.name')->searchable()->sortable(),

                                       TextColumn::make('due_date')->date(),
                                   ]);
        }

        public static function getPages(): array
        {
            return [
                'index' => Pages\ListExpenses::route('/'),
                'create' => Pages\CreateExpense::route('/create'),
                'edit' => Pages\EditExpense::route('/{record}/edit'),
            ];
        }

        protected static function getGlobalSearchEloquentQuery(): Builder
        {
            return parent::getGlobalSearchEloquentQuery()->with([
                                                                    'employee',
                                                                    'vendor'
                                                                ]);
        }

        public static function getGloballySearchableAttributes(): array
        {
            return [
                'employee.name',
                'vendor.name'
            ];
        }

        public static function getGlobalSearchResultDetails(Model $record): array
        {
            $details = [];

            if($record->employee) {
                $details['Employee'] = $record->employee->name;
            }

            if($record->vendor) {
                $details['Vendor'] = $record->vendor->name;
            }

            return $details;
        }
    }
