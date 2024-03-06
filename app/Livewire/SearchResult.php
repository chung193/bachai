<?php

namespace App\Livewire;

use Livewire\Component;

class SearchResult extends Component
{
    public function render()
    {
        return view('livewire.search-result')->layout('components.layouts.app', ['title' => 'Kết quả tìm kiếm']);
    }
}
