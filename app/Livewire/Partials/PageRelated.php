<?php

namespace App\Livewire\Partials;

use App\Models\Page;
use Livewire\Component;

class PageRelated extends Component
{
    public function render()
    {
        $pages = Page::latest()->take(5)->get();
        return view('livewire.partials.page-related', ['pages'=> $pages]);
    }
}
