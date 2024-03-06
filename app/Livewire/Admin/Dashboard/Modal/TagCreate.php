<?php

namespace App\Livewire\Admin\Dashboard\Modal;

use Livewire\Component;
use App\Models\Tag;

class TagCreate extends Component
{
    public $name;
    public function mount()
    {
        $this->name = "";
    }
    protected function rules()
    {
        return [
            'name' => 'required|min:3',
        ];
    }
    public function slug_handle($name)
    {
        $slug = create_slug($name);
        $tag = Tag::where('slug', $slug)->first();
        if (!$tag)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $tag = Tag::where('slug', $slug)->first();
                $i++;
            } while ($tag != null);
            return $slug;
        }
    }

    public function createTag()
    {
        $this->validate();
        Tag::create([
            "name" => $this->name,
            "slug" => $this->slug_handle($this->name)
        ]);
        $this->name = "";
        $this->dispatch('reload', isSuccess: true);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.modal.tag-create');
    }
}
