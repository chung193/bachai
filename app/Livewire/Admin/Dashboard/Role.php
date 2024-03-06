<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Spatie\Permission\Models\Role as RoleModel;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\On;

class Role extends Component
{
    public $breadcrumb;
    public $roles;
    public $editId;
    public $name, $description;
    public function mount()
    {
        $this->breadcrumb = [
            "Role" => url("admin/dashboard/roles/"),
        ];
        $this->roles = RoleModel::all();
    }

    public function editRole($id)
    {
        $this->editId = $id;
        $role = RoleModel::find($id);

        if ($role != null) {
            $this->name = $role->name;
            $this->description = $role->description;
        }
    }

    public function updateRole()
    {
        $role = RoleModel::find($this->editId);
        $role->name = $this->name;
        $role->description = $this->description;
        $role->save();
        $this->name = "";
        $this->description = "";
        $this->mount();
        $this->dispatch('close-modal');
        session()->flash('message', 'Role Updated Successfully');
    }

    public function delete($id)
    {
        $data = RoleModel::find($id);
        $data->delete();
        $this->mount();
        session()->flash('message', 'Data updated Successfully');
    }

    #[On('reload')]
    public function update($isSuccess)
    {
        if ($isSuccess) {
            $this->mount();
            session()->flash('message', 'Role Created Successfully');
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.role')->layout('components.layouts.admin',  [
            'title' => "Role"
        ]);
    }
}
