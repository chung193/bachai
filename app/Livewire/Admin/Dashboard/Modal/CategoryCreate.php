<?php

namespace App\Livewire\Admin\Dashboard\Modal;

use Livewire\Component;
use App\Models\Catalog as Category;

class CategoryCreate extends Component
{
    public $name;
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

    public function createCategory()
    {
        $this->validate([
            "name" => "required",
        ]);
        Category::create([
            "name" => $this->name,
            "slug" => $this->slug_handle($this->name)
        ]);

        $this->name = "";
        $this->dispatch('reload', isSuccess: true);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.modal.category-create');
    }
}
