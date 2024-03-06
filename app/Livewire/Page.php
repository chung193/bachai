<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page as PageModel;
class Page extends Component
{
    public $slug;

    public $created;
    public $img;
    public $name;
    public $content;

    public function mount($slug)
    {
        //get Page
        $page = PageModel::where('slug','=',$slug)->first();
        if($page == null) abort(404);
        //assign
        $this->slug   = $page->slug;
        $this->img   = $page->img;
        $this->name    = $page->name;
        $this->created    = $page->created_at;
        $this->content  = $page->content;
    }
    public function render()
    {
        return view('livewire.page')->layout('components.layouts.app',['title'=> $this->name]);
    }
}
