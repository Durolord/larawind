<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class EditRole extends Component
{
    use Actions;
    public $role;
    public $name;
    public $button;
    public $label;
    protected $rules = [
        'name' => 'required',
    ];
    public function mount($id){
        $this->header = 'Edit Role';
        $this->button = 'Update';
        $this->role = Role::find($id);
        $this->label = 'Role Name';
        $this->name = $this->role->name;
         
    }
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
        $this->role->name = $this->name;
        $this->role->save();
        return redirect()->to('/roles');
    }
    public function render()
    {
        return view('livewire.create-roles')->layoutData(['title' => 'Edit Role']);
    }
}
