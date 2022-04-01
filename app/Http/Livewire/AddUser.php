<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;
use App\Models\User;

class AddUser extends Component
{
    use Actions;
    public $users;
    public $user;
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
        $users = User::all();
        $contacts = User::role($id)->get()->pluck('name');
        $filtered = $users->whereNotIn('name', $contacts);
        $this->users = $filtered;
        $this->button = 'Create';
        $this->andnew = 'Create & create another';
    }
    public function add()
    {
        foreach ($this->user as $id) {
            User::find($id)->assignRole($this->role);
        }
             $this->notification()->success(
                $title = 'Role added',
                $description = 'Role assigned successfully'
            );
        $this->emitTo('view-role-users', '$refresh');
        $this->emitSelf('$refresh');
 
    }
    
    public function render()
    {
        return view('livewire.add-user');
    }
}
