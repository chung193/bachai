<?php

namespace App\Livewire\Admin\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $user;
    public function mount()
    {
        if (Auth::check()) {
            $this->user = Auth::user();
        }
    }
    public function render()
    {
        return view('livewire.admin.partials.navbar');
    }
}
