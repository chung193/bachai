<?php

namespace App\Livewire\Admin\Dashboard\Components;

use Livewire\Component;
use App\Imports\CustomerImport;
use App\Imports\BookingImport;

use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class UploadExcel extends Component
{

    use WithFileUploads;
    #[Validate('max:102400')] // 1MB Max
    public $file;
    public function loadToDb($filename)
    {
        Excel::import(new CustomerImport, $this->file);
        Excel::import(new BookingImport, $this->file);
        $this->dispatch('reload', isSuccess: "Update success");
    }
    public function import()
    {
        if ($this->file) {
            $fileName = $this->file->getClientOriginalName();

            $arr = explode(".", $fileName);
            $res =  Storage::disk('public_uploads')->put('files', $this->file);
            $arr = explode("/", $res);
            $filename = $arr[sizeof($arr) - 1];
            $this->loadToDb(public_path() . '/files/' . $filename);
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.components.upload-excel');
    }
}
