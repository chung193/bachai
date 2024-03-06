<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class Forgot extends Component
{
    public $email;
    public $status;
    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(['email' => $this->email]);

        $this->status = $status == Password::RESET_LINK_SENT
            ? __('A password reset link has been sent to your email address.')
            : __('We could not send a reset link to that email address.');
    }
    public function render()
    {
        return view('livewire.admin.auth.forgot')->layout('components.layouts.admin-auth', ['title' => 'Forgot Password']);
    }
}
