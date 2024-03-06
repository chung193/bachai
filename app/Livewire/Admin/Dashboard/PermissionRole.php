<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Role;
use App\Models\Permission;

class PermissionRole extends Component
{
    public Role $role;
    public $breadcrumb;
    public $permissions;
    public function mount($name)
    {
        $this->role = Role::findByName($name);
        $this->breadcrumb = [
            "Permission of Role " . $this->role->name => url("admin/dashboard/roles/"),
        ];
        $this->permissions = $this->role->permissions;
    }
    public function render()
    {
        return view('livewire.admin.dashboard.permission-role')->layout('components.layouts.admin',  [
            'title' => "Permission of Role"
        ]);
    }
}
