<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Hash;

class UserAdd extends Component
{
    public $breadcrumb;
    public $path;
    public $name, $email, $password, $cfpassword;
    protected $rules = [
        "name" => "required",
        "password" => "required|min:6",
        "email" => "required|unique:users",
        'confirmPassword' => 'required|same:password',
    ];

    public function add()
    {
        $user = User::create([
            "name" => $this->name,
            "email" => $this->email,
            'password' => Hash::make($this->password),
        ]);


        $this->name = "";
        $this->password = "";
        $this->cfpassword = "";

        session()->flash('message', 'Data updated Successfully');
        return redirect()->route('dashboard.users');
    }
    public function mount()
    {
        $this->path = "user";
        $this->breadcrumb = [
            "Add user" => url("admin/dashboard/user-add/"),
        ];
    }
    public function render()
    {
        return view('livewire.admin.dashboard.user-add')->layout('components.layouts.admin',  [
            'title' => 'Add user'
        ]);
    }
}
