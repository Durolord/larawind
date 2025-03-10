<?php

namespace App\Http\Livewire;

use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Filament\Tables\Columns\TextColumn;
use App\Tables\Columns\DiffFor;
use App\Tables\Columns\Delete;
use Filament\Tables\Actions\LinkAction;
use Filament\Tables\Actions\ButtonAction;
use Filament\Tables\Actions\IconButtonAction;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;
 
class RoleTable extends Component implements Tables\Contracts\HasTable

{
    use Tables\Concerns\InteractsWithTable;
 
    protected function getTableQuery(): Builder 
    {
        return Role::query();
    } 
 
    public function render()
    {
        return view('livewire.role-table');
    }

    protected function getTableActions(): array
    {
       return [
        ButtonAction::make('edit')
            ->url(fn (Role $record): string => route('role.edit', $record))
            ->label('Edit')
            ->color('warning')
            ->icon('heroicon-o-pencil'),
        ButtonAction::make('show')
            ->url(fn (Role $record): string => route('role.show', $record))
            ->label('View')
            ->color('primary')
            ->icon('heroicon-o-eye')
        ];
    }
    protected function getTableBulkActions(): array
        {
            return [
                BulkAction::make('delete')
                ->action(fn (Collection $records) => $records->each->delete())
                ->deselectRecordsAfterCompletion()
                ->requiresConfirmation()
                ->color('danger')
                ->icon('heroicon-o-trash')
            ];
        }

    protected function getTableColumns(): array 
    {
       return [
        TextColumn::make('id'),
        TextColumn::make('name'),
        DiffFor::make('created_at'),
        DiffFor::make('updated_at'),
        ];
    }
}
