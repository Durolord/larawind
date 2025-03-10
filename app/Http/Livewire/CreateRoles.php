<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class CreateRoles extends Component
{
    use Actions;
    public $name;
    public $header;
    public $button;
    public $andnew;
    public $label;

    protected $rules = [
        'name' => 'required',
    ];
    public function mount(){
        $this->header = 'Create Role';
        $this->label = 'Role Name';
        $this->button = 'Create';
        $this->andnew = 'Create & create another';
    }
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
         Role::create(['guard_name' => 'web','name' => $this->name,]);
        return redirect()->to('/roles');
    }
    public function submitandnew()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Role::create(['guard_name' => 'web','name' => $this->name,]);
        $this->name = null;
    }
    public function render()
    {
        return view('livewire.create-roles')->layoutData(['title' => 'Create Role']);
    }
}
