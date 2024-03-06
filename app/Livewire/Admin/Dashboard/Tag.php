<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Tag as TagModel;
use Livewire\Attributes\On;

class Tag extends Component
{
    public $breadcrumb;
    public $tags;
    public $editId;
    public $name, $slug;
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
    public function slug_handle($name)
    {
        $slug = create_slug($name);
        $cat = TagModel::where('slug', $slug)->first();
        if (!$cat)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $cat = TagModel::where('slug', $slug)->first();
                $i++;
            } while ($cat != null);
            return $slug;
        }
    }

    public function editTag($id)
    {
        $this->editId = $id;
        $tag = TagModel::find($id);

        if ($tag != null) {
            $this->name = $tag->name;
        }
    }
    public function updateTag()
    {
        $tag = TagModel::find($this->editId);
        $tag->name = $this->name;
        $tag->slug = $this->slug_handle($this->name);
        $tag->save();
        $this->name = "";

        $this->mount();
        $this->dispatch('close-modal');
        session()->flash('message', 'Tag Updated Successfully');
    }
    public function mount()
    {
        $this->breadcrumb = [
            "Tag" => url("admin/dashboard/tag"),
        ];
        $this->tags = TagModel::all();
    }

    #[On('reload')]
    public function update($isSuccess)
    {
        if ($isSuccess) {
            $this->mount();
            session()->flash('message', 'Category Created Successfully');
        }
    }

    public function delete($id)
    {
        $data = TagModel::find($id);
        $data->delete();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.dashboard.tag')->layout('components.layouts.admin',  ['title' => 'Tag']);
    }
}
