<?php

namespace App\Livewire\Admin\Dashboard\Modal;

use Livewire\Component;
use App\Models\Role;

class RoleCreate extends Component
{
    public $name;
    public $description;
    public function createRole()
    {
        $this->validate([
            "name" => "required",
        ]);
        Role::create([
            "name" => $this->name,
            "description" => $this->description
        ]);
        $this->name = "";
        $this->description = "";
        $this->dispatch('reload', isSuccess: true);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.modal.role-create');
    }
}
