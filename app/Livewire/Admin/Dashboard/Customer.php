<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Customer as customerModel;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Customer extends Component
{
    use WithPagination;
    public $breadcrumb;
    public $chooseList;
    public function mount()
    {
        $this->breadcrumb = [
            "Customers" => url("admin/dashboard/customer"),
        ];
    }

    #[On('reload')]
    public function update($isSuccess)
    {
        if ($isSuccess) {
            $this->mount();
            session()->flash('message', 'Customers Import Successfully');
        }
    }
    public function render()
    {
        $customers = customerModel::orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.admin.dashboard.customer', ['customers' => $customers])->layout('components.layouts.admin',  [
            'title' => 'Customers'
        ]);
    }
}
