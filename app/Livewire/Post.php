<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post as PostModel;
class Post extends Component
{
    
    public $slug;
    public $created;
    public $img;
    public $name;
    public $content;

    public function mount($slug)
    {
        
        //get Page
        $post = PostModel::where('slug','=',$slug)->first();
        if($post == null) abort(404);
        //assign
        $this->slug   = $post->slug;
        $this->img   = $post->img;
        $this->name    = $post->name;
        $this->content  = $post->content;
        $this->created = $post->created_at;
    }
    public function render()
    {
        return view('livewire.post')->layout('components.layouts.app',['title'=> $this->name]);
    }
}
