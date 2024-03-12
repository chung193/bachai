<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Models\Booking as bookingModel;

class Booking extends Component
{
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
            session()->flash('message', 'Booking Import Successfully');
        }
    }
    public function render()
    {
        $bookings = bookingModel::with('getCustomer')->orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.admin.dashboard.booking', ['bookings' => $bookings])->layout('components.layouts.admin',  [
            'title' => 'Booking'
        ]);
    }
}
