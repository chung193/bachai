<?php

namespace App\Livewire\Admin\Dashboard\Components;

use Livewire\Component;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class UploadExcel extends Component
{

    use WithFileUploads;
    #[Validate('max:102400')] // 1MB Max
    public $file;
    public function import()
    {
        if ($this->file != null) {
            // $res = Storage::disk('public_uploads')->put('files', $this->file);
            // dd($res);
            // $arr = explode("/", $res);
            // $filename = $arr[sizeof($arr) - 1];
            // dd($filename);
            // $this->dispatch('upload', info: $filename);
            Excel::import(new CustomerImport, $this->file);
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.components.upload-excel');
    }
}
