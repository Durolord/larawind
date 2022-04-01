<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\User;

class ShowRole extends Component
{
    public $role;
    public $name;
    public function mount($id){
        $this->role = Role::find($id);

    }

    public function render()
    {
        return view('livewire.show-role')->layoutData(['title' => 'Show Role']);
    }
}
