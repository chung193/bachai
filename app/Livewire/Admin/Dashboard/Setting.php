<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Setting as SettingModel;

class Setting extends Component
{
    public $breadcrumb;
    public SettingModel $option;
    protected $rules = [
        "option.name" => "required",
        "option.description" => "required",
        "option.google_analytics" => "required",
        "option.facebook_url" => "required",
        "option.github_url" => "required",
        "option.linkedin_url" => "required",
        "option.facebook_plugin_code" => "required",
    ];
    public function mount()
    {
        $this->breadcrumb = [
            "Setting" => url("admin/dashboard/setting/"),
        ];
        $this->option = SettingModel::find(1);
    }
    public function update()
    {
        $this->option->save();
        session()->flash('message', 'Data updated');
    }
    public function render()
    {
        return view('livewire.admin.dashboard.setting')->layout('components.layouts.admin',  [
            'title' => "Setting"
        ]);
    }
}
