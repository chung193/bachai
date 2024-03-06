<?php

namespace App\Livewire\Admin\Dashboard\Modal;

use Livewire\Component;
use App\Models\Permission;

class PermissionCreate extends Component
{
    public $name;
    public $description;
    public function createPermission()
    {
        $this->validate([
            "name" => "required",
        ]);
        Permission::create([
            "name" => $this->name,
            "description" => $this->description
        ]);
        $this->name = "";
        $this->description = "";
        $this->dispatch('reload', isSuccess: true);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.modal.permission-create');
    }
}
