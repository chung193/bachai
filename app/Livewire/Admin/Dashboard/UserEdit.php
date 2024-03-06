<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public $breadcrumb;
    public $path;
    public User $user;
    public $image, $slug;
    protected $rules = [
        "user.name" => "required",
        "user.slug" => "required",
        "user.email" => "required|unique:users",
        "user.description" => "required",
    ];
    public function mount($slug)
    {
        $this->user = User::where("slug", "=", $slug)->first();
        $this->image = $this->user->image;
        $this->slug = $this->user->slug;
        $this->path = "user";
        $this->breadcrumb = [
            "Edit user" . $this->user->name => url("admin/dashboard/user-edit/" . $this->user->name),
        ];
    }

    #[On('upload')]
    public function updatePhoto($info)
    {
        $this->image = $info;
    }

    public function slug_handle($name)
    {
        $slug = create_slug($name);
        $us = User::where('slug', $slug)->first();
        if (!$us)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $us = User::where('slug', $slug)->first();
                $i++;
            } while ($us != null);
            return $slug;
        }
    }

    public function nameChange()
    {
        $this->slug = $this->slug_handle($this->user->name);
    }

    public function update()
    {
        $this->user->image = $this->image;
        $this->user->slug = $this->slug;
        $this->user->save();
        session()->flash('message', 'Data updated Successfully');
        return redirect()->route('dashboard.users');
    }
    public function render()
    {
        return view('livewire.admin.dashboard.user-edit')->layout('components.layouts.admin',  [
            'title' => 'Edit user'
        ]);
    }
}
