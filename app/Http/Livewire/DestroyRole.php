<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class DestroyRole extends Component
{
    use Actions;
    public $role;
    public function mount($id){
        Role::destroy($id);
        return redirect()->route('roles.index');
         
    }
}
