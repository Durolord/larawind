<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class CreateRoles extends Component
{
    use Actions;
    public $name;
    protected $rules = [
        'name' => 'required',
    ];
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Role::create([
            'name' => $this->name,
        ]);
        $this->notification()->success(
            $title = 'Role saved',
            $description = $this->name.' role created successfully'
        );
    }
    public function render()
    {
        return view('livewire.create-roles');
    }
}
