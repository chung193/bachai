<?php

namespace App\Livewire\Admin\Partials;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $breadcrumb;

    public function mount($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }
    public function render()
    {
        return view('livewire.admin.partials.breadcrumb');
    }
}
