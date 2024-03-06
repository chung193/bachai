<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class PermissionUser extends Component
{

    public $roles;
    public $breadcrumb;
    public User $user;
    public $roleSelect;
    public $slug;
    public function mount($slug)
    {
        $this->user = User::where('slug', '=', $slug)->first();
        $this->slug = $slug;
        $this->breadcrumb = [
            "Assign role for user" . $this->user->name => url("admin/dashboard/roles/"),
        ];
        $this->roles = Role::all();
        //dd($this->user->roles[0]->id);
        if (count($this->user->roles) > 0)
            $this->roleSelect = $this->user->roles[0]->id;
    }

    public function add()
    {
        if ($this->roleSelect != null) {

            if (count($this->user->roles) > 0)
                foreach ($this->user->roles as $role) {
                    $this->user->removeRole($role);
                }
            $role = Role::find($this->roleSelect);
            $this->user->assignRole($role);
            $this->mount($this->slug);
            session()->flash('message', 'Data Created Successfully');
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.permission-user')->layout('components.layouts.admin',  [
            'title' => "Assign Role for user"
        ]);
    }
}
