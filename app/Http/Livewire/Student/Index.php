<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Index extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Student::query();
    }
    protected function getTableColumns(): array
    {
        return [

            ImageColumn::make('dp'),
          TextColumn::make('name'),
          TextColumn::make('father_name'),
          TextColumn::make('gender'),
          TextColumn::make('mobile'),
        ];
    }

    protected function getTableActions(): array
    {
        return[
            Action::make('edit')
            ->label('Edit')
            ->form([
                    TextInput::make('name'),
                   ])
            ->action(function(){

            }),
            Action::make('delete')
                ->label('Delete')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->action(function (Student $record){
                    dd($record);
                })
                ->requiresConfirmation(),
        ];
    }
    protected function getTableBulkActions(): array
    {
        return [ ];
    }

    public function render()
    {
        return view('livewire.student.index');
    }
}
