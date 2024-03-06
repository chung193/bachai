<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Catalog as CategoryModel;
use Livewire\Attributes\On;
use Illuminate\Support\Str;

class Category extends Component
{
    public $breadcrumb;
    public $categories;
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
        $cat = CategoryModel::where('slug', $slug)->first();
        if (!$cat)
            return $slug;
        else {
            $i = 1;
            do {

                $slug = $slug . '-' . $i;
                $cat = CategoryModel::where('slug', $slug)->first();
                $i++;
            } while ($cat != null);
            return $slug;
        }
    }

    public function mount()
    {
        $this->breadcrumb = [
            "Categories" => url("admin/dashboard/category"),
        ];
        $this->categories = CategoryModel::all();
    }

    public function editCategory($id)
    {
        $this->editId = $id;
        $category = CategoryModel::find($id);

        if ($category != null) {
            $this->name = $category->name;
        }
    }

    public function updateCategory()
    {
        $category = CategoryModel::find($this->editId)->first();
        $category->name = $this->name;
        $category->slug = $this->slug_handle($this->name);
        $category->save();
        $this->name = "";

        $this->mount();
        $this->dispatch('close-modal');
        session()->flash('message', 'Category Updated Successfully');
    }

    public function delete($id)
    {
        $data = CategoryModel::find($id);
        $data->delete();
        $this->mount();
        session()->flash('message', 'Delete Successfully');
    }

    #[On('reload')]
    public function update($isSuccess)
    {
        if ($isSuccess) {
            $this->mount();
            session()->flash('message', 'Category Created Successfully');
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.category')->layout('components.layouts.admin',  [
            'title' => 'Categories',
            'breadcrumb' => $this->breadcrumb
        ]);
    }
}
