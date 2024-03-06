<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Post as PostModel;
use Livewire\WithPagination;

class Post extends Component
{
    use WithPagination;
    public $breadcrumb;
    public $searchPost;
    public $count;
    public function mount()
    {
        $this->breadcrumb = [
            "Posts" => url("admin/dashboard/post"),
        ];
        $this->count = PostModel::count();
    }

    // public function searchUpdate()
    // {
    //     $this->render($this->searchPost);
    // }

    public function delete($id)
    {
        $data = PostModel::find($id);
        $data->delete();
        $this->mount();
        session()->flash('message', 'Data Created Successfully');
    }
    public function render($keyword = null)
    {
        // if ($keyword == null) {
        //     $listPost = PostModel::with("categories")->with('tags')->orderBy('created_at', 'desc')->paginate(15);
        // } else {
        //     $listPost = PostModel::with("categories")->with('tags')->where('name', 'like', '%' . $keyword . '%')->orderBy('created_at', 'desc')->paginate(15);
        // }
        $listPost = PostModel::orderBy('created_at', 'desc')->paginate(15);
        return view(
            'livewire.admin.dashboard.post',
            ['listPost' => $listPost]
        )->layout('components.layouts.admin',  [
            'title' => 'Posts'
        ]);
    }
}
