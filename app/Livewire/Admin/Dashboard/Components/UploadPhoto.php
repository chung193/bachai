<?php

namespace App\Livewire\Admin\Dashboard\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class UploadPhoto extends Component
{
    use WithFileUploads;
    #[Validate('image|max:102400')] // 1MB Max
    public $photo, $path;
    public function mount($path)
    {
        if ($path == null)
            $this->path = 'post';
        $this->path = $path;
    }
    public function save()
    {
        if ($this->photo != null) {
            //$res = $this->photo->storeAs("public_uploads", $this->path);
            $res = Storage::disk('public_uploads')->put('post', $this->photo);
            $arr = explode("/", $res);
            $filename = $arr[sizeof($arr) - 1];
            $this->dispatch('upload', info: $filename);
        }
    }
    public function render()
    {
        return view('livewire.admin.dashboard.components.upload-photo');
    }
}
