<?php

namespace App\Livewire\Landingpage;

use Livewire\Component;
use App\Models\Post;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.landingpage.blog',  [
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
