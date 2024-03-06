<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Catalog as Category;
use App\Models\Post;
use Livewire\Attributes\On;

class PostAdd extends Component
{
    public $breadcrumb;
    public $categories;

    // lấy input là các tags và các Category
    public $inputCategory = [];
    // post
    public $slug, $name, $summary, $content, $image, $userId, $path = "post";

    protected $rules = [
        "name" => "required",
        "slug" => "required",
        "summary" => "required",
        "content" => "required",
        "published" => "required",
    ];
    public function slug_handle($name)
    {
        $slug = create_slug($name);
        $cat = Post::where('slug', $slug)->first();
        if (!$cat)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $cat = Post::where('slug', $slug)->first();
                $i++;
            } while ($cat != null);
            return $slug;
        }
    }

    #[On('upload')]
    public function updatePhoto($info)
    {
        $this->image = $info;
    }

    public function nameChange()
    {
        $this->slug = $this->slug_handle($this->name);
    }
    public function mount()
    {
        $this->breadcrumb = [
            "Add post" => url("admin/dashboard/post"),
        ];
        $this->categories = Category::all();
    }

    public function add()
    {
        $post = Post::create([
            "name" => $this->name,
            "content" => $this->content,
            "slug" => $this->slug,
            "summary" => $this->summary,
            "image" => $this->image,
            "userId" => auth()->user()->id,
            "published" => $this->published ? $this->published : true,
        ]);

        $this->name = "";
        $this->slug = "";
        $this->summary = "";
        $this->image = "";
        $this->userId = "";
        $this->content = "";
        session()->flash('message', 'Data Updated Successfully');
        return redirect()->route('dashboard.post');
    }

    public function render()
    {
        return view('livewire.admin.dashboard.post-add')->layout('components.layouts.admin',  [
            'title' => 'Add post'
        ]);
    }
}
