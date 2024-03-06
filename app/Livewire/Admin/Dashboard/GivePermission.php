<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Role;
use App\Models\Permission;

class GivePermission extends Component
{
    public $breadcrumb;
    public $permissions;
    public $select;
    public Role $role;
    public $name;
    public function mount($name)
    {
        $this->breadcrumb = [
            "Role" => url("admin/dashboard/roles/"),
        ];
        $this->role = Role::findByName($name);
        $this->select = [];
        if (count($this->role->permissions)) {
            foreach ($this->role->permissions as $item) {
                array_push($this->select, $item->id);
            }
        }
        $this->name = $name;
        $this->permissions = Permission::all();
    }

    public function add()
    {
        if (count($this->role->permissions)) {
            foreach ($this->role->permissions as $item) {
                $this->role->revokePermissionTo($item);
            }
        }
        if (count($this->select) > 0) {
            foreach ($this->select as $item) {
                $this->role->givePermissionTo(Permission::findById($item));
            }
        }
        $this->mount($this->name);
        session()->flash('message', 'Give Successfully');
    }
    public function render()
    {
        return view('livewire.admin.dashboard.give-permission')->layout('components.layouts.admin',  [
            'title' => "Give permission cho role " . $this->role->name
        ]);
    }
}
