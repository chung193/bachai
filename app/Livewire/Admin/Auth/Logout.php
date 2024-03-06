<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.auth.login'); // Chuyển hướng sau khi logout, thay 'login' bằng route bạn muốn
    }
    public function render()
    {
        return view('livewire.admin.auth.logout');
    }
}
