<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Share extends Component
{
    public $url;
    public function render()
    {
        return view('livewire.partials.share');
    }
}
