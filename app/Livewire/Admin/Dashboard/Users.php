<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    use WithPagination;
    public $breadcrumb;
    public $id, $password, $name;
    public function editPassword($id)
    {
        $this->id = $id;
        $user = User::find($id);
        if ($user != null) {
            $this->name = $user->name;
        }
    }

    public function updatePassword()
    {
        $user = User::find($this->id);
        $user->password = Hash::make($this->password);;
        $user->save();
        $this->id = "";
        $this->password = "";

        $this->mount();
        $this->dispatch('close-modal');
        session()->flash('message', 'User' . $user->name . ' Password Updated Successfully');
    }
    public function mount()
    {
        $this->breadcrumb = [
            "Users" => url("admin/dashboard/users/"),
        ];
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        $this->mount();
        session()->flash('message', 'Data updated Successfully');
    }
    public function render()
    {
        $users =  User::paginate(15);
        return view(
            'livewire.admin.dashboard.users',
            [
                'users' => $users
            ]
        )->layout('components.layouts.admin',  [
            'title' => 'Users'
        ]);
    }
}
