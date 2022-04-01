<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;
use Spatie\Permission\Models\Permission;


class AddPermission extends Component
{
    use Actions;
    public $permissions;
    public $permission;
    public $role;
    public $array;

    protected $rules = [
        'name' => 'required',
    ];
    protected $listeners = [
        '$refresh'
    ];

    public function mount($id){
        $this->role = Role::find($id);
        $permissions = Permission::all();
        $contacts = Permission::query()->role($this->role,'web')->pluck('name');
        $filtered = $permissions->whereNotIn('name', $contacts);
        $this->permissions = $filtered;
        $this->button = 'Create';
        $this->andnew = 'Create & create another';
    }
    public function add()
    {
            foreach ($this->permission as $id) {
            $this->role->givePermissionTo($id);
            }
             $this->notification()->success(
                $title = 'Permissions added',
                $description = 'Permissions assigned successfully'
            );
        $this->emitTo('role-permissions', '$refresh');
        $this->emitSelf('$refresh');
 
    }
    
    public function render()
    {
        return view('livewire.add-permission');
    }
}
