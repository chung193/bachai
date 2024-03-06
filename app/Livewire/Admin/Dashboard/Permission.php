<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Permission as PermissionModel;
use Livewire\Attributes\On;

class Permission extends Component
{
    public $breadcrumb;
    public $permissions;
    public $editId;
    public $name, $description;
    public function mount()
    {
        $this->breadcrumb = [
            "Permission" => url("admin/dashboard/roles/"),
        ];
        $this->permissions = PermissionModel::all();
    }
    public function delete($id)
    {
        $data = PermissionModel::find($id);
        $data->delete();
        $this->mount();
        session()->flash('message', 'Delete Successfully');
    }

    public function editPermission($id)
    {
        $this->editId = $id;
        $permission = PermissionModel::find($id);

        if ($permission != null) {
            $this->name = $permission->name;
            $this->description = $permission->description;
        }
    }

    public function updatePermission()
    {
        $permission = PermissionModel::find($this->editId);
        $permission->name = $this->name;
        $permission->description = $this->description;
        $permission->save();
        $this->name = "";
        $this->description = "";
        $this->mount();
        $this->dispatch('close-modal');
        session()->flash('message', 'Permission Updated Successfully');
    }

    #[On('reload')]
    public function update($isSuccess)
    {
        if ($isSuccess) {
            $this->mount();
            session()->flash('message', 'Category Created Successfully');
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.permission')->layout('components.layouts.admin',  [
            'title' => "Permission"
        ]);
    }
}
