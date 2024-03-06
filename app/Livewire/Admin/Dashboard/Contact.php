<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Contact as ContactModel;
use Livewire\WithPagination;

class Contact extends Component
{
    public $breadcrumb;
    public function mount()
    {
        $this->breadcrumb = [
            "Contact" => url("admin/dashboard/contact"),
        ];
    }
    public function render()
    {
        $contact = ContactModel::paginate(15);
        return view(
            'livewire.admin.dashboard.contact',
            ['contact' => $contact]
        )->layout('components.layouts.admin',  [
            'title' => 'Contact',
            'breadcrumb' => $this->breadcrumb
        ]);
    }
}
