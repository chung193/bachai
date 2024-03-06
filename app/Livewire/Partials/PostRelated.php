<?php

namespace App\Livewire\Partials;

use App\Models\Post;
use Livewire\Component;

class PostRelated extends Component
{
    public function render()
    {
        $posts = Post::latest()->take(5)->get();
        return view('livewire.partials.post-related', ['posts'=> $posts]);
    }
}
