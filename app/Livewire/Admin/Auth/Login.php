<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email;
    public $password;

    public $remember_me;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required|min:6',
    ];
    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/admin/dashboard/home');
        }
        $this->fill([
            'email' => 'chungvd.it@gmail.com',
            'password' => '123123',
        ]);
    }
    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $credentials = $this->validate();
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(['email' => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/admin/dashboard/home');
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('components.layouts.admin-auth', ['title' => 'Login']);
    }
}
