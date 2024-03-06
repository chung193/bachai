<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\On;
use App\Models\PostCategory;
use App\Models\PostTag;

class PostEdit extends Component
{
    public $breadcrumb;
    public $categories;
    public $tags;
    public $publish;
    public $imageReplace;
    public Post $post;
    public $slug, $inputTags, $inputCategory, $path = "post", $image;
    public $tagOfPost, $categoryOfPost;
    protected $rules = [
        'post.name' => 'required',
        'post.slug' => 'required',
        'post.summary' => 'required',
        'post.content' => 'required',
        'post.image' => 'required',
        'post.published' => 'required',
    ];
    public function mount($slug)
    {
        // gán giá trị cho biến cần
        $this->inputTags = [];
        $this->inputCategory = [];

        // khởi tạo giá trị
        $this->post = Post::where('slug', $slug)->first();
        $this->breadcrumb = [
            "Edit post" => url("admin/dashboard/post-edit/" . $slug),
        ];
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->tagOfPost = PostTag::where('postId', $this->post->id)->get();
        $this->categoryOfPost = PostCategory::where('postId', $this->post->id)->get();
        //chuẩn bị dữ liệu
        foreach ($this->categoryOfPost as $item) {
            array_push($this->inputCategory, $item->categoryId);
        }

        foreach ($this->tagOfPost as $item) {
            array_push($this->inputTags, $item->tagId);
        }
        $this->publish = $this->post->published == 1 ? 1 : 0;
        $this->imageReplace = $this->post->image;
    }

    public function changePublished()
    {
        $this->publish = $this->publish == 1 ? 0 : 1;
    }

    public function slug_handle($name)
    {
        $slug = create_slug($name);
        $cat = Category::where('slug', $slug)->first();
        if (!$cat)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $cat = Category::where('slug', $slug)->first();
                $i++;
            } while ($cat != null);
            return $slug;
        }
    }

    #[On('upload')]
    public function updatePhoto($info)
    {
        $this->imageReplace = $info;
    }

    public function update()
    {
        $this->post->published = $this->publish;
        $this->post->image = $this->imageReplace;
        $this->post->save();


        if (count($this->inputTags) >  0) {
            $this->inputTags = array_unique($this->inputTags);
            $test = PostTag::where('postId', '=', $this->post->id)->delete();
            foreach ($this->inputTags as $item) {
                $data = [
                    'postId' => $this->post->id,
                    'tagId' => $item,
                ];
                PostTag::create($data);
            }
        }
        if (count($this->inputCategory) > 0) {
            $this->inputCategory = array_unique($this->inputCategory);
            $test = PostCategory::where('postId', '=', $this->post->id)->delete();

            foreach ($this->inputCategory as $item) {
                PostCategory::create([
                    'postId' => $this->post->id,
                    'categoryId' => $item,
                ]);
            }
        }
        session()->flash('message', 'Data updated Successfully');
        return redirect()->route('dashboard.post');
    }

    public function nameChange()
    {
        $this->post->slug = $this->slug_handle($this->post->name);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.post-edit')->layout('components.layouts.admin',  [
            'title' => $this->post->name
        ]);
    }
}
