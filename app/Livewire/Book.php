<?php

namespace App\Livewire;

use Livewire\Component;

class Book extends Component
{
    public function render()
    {
        return view('livewire.book')->layout('components.layouts.app', ['title' => 'Đặt vé máy bay']);
    }
}
