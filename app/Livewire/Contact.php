<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as contactModel;
use Illuminate\Support\Facades\Validator;

class Contact extends Component
{
    public $name, $mail, $message;
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ];
    }
    public function addContact()
    {

        contactModel::create([
            'name' => $this->name,
            'email' => $this->mail,
            'message' => $this->message,
        ]);
        session()->flash('message', 'Tin nhắn của bạn đã được gửi đi, chúng tôi sẽ phản hồi sớm nhất có thể');
        $this->name = "";
        $this->mail = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
