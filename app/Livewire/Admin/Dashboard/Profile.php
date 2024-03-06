<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Profile extends Component
{
    public $breadcrumb;
    public User $user;
    public $path;
    public $image;
    public function mount()
    {
        $this->path = "user";
        $this->user = Auth::user();
        $this->breadcrumb = [
            "Profile" => url("admin/dashboard/profile"),
        ];
    }
    public function nameChange()
    {
        $this->user->slug = $this->slug_handle($this->user->name);
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

    #[On('upload')]
    public function updatePhoto($info)
    {
        $this->image = $info;
    }

    public function update()
    {
        $this->user->save();
        $this->mount();
        session()->flash('message', 'Data updated Successfully');
    }
    protected $rules = [
        'user.name' => 'required|min:6',
        'user.email' => 'required|email',
        'user.description' => 'required',
    ];
    public function render()
    {
        return view('livewire.admin.dashboard.profile')->layout('components.layouts.admin',  [
            'title' => 'Profile'
        ]);
    }
}
