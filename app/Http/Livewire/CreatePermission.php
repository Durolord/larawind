<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use WireUi\Traits\Actions;

class CreatePermission extends Component
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
        $this->header = 'Create Permission';
        $this->label = 'Permission Name';
        $this->button = 'Create';
        $this->andnew = 'Create & create another';
    }
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Permission::create([
            'guard_name' => 'web','name' => $this->name,
        ]);
        return redirect()->to('/permissions');
    }
    public function submitandnew()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Permission::create([
            'guard_name' => 'web','name' => $this->name,
        ]);
        $this->name = null;
    }
    public function render()
    {
        return view('livewire.create-roles')->layoutData(['title' => 'Create Permission']);
    }
}
