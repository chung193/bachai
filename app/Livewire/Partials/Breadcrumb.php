<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $current;
    public $created;
    public function render()
    {
        return view('livewire.partials.breadcrumb');
    }
}
