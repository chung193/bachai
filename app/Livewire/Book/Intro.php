<?php

namespace App\Livewire\Book;

use Livewire\Component;

class Intro extends Component
{
    public function render()
    {
        return view('livewire.book.intro')->layout('components.layouts.app', ['title' => 'Đặt vé máy bay']);
    }
}
