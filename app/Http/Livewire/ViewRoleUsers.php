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

class ViewRoleUsers extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    public $role;
    protected $listeners = [
        '$refresh'
    ];

    protected function getTableQuery() 
    {
        return User::query()->role($this->role);
    }


    public function render()
    {
        return view('livewire.role-table');
    }
    protected function getTableColumns(): array 
    {
       return [
        TextColumn::make('id'),
        TextColumn::make('name'),
        ];
    }
}
