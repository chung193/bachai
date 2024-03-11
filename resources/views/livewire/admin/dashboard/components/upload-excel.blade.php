<form wire:submit.prevent="import" enctype="multipart/form-data">
    <input type="file" class="form-control my-2" wire:model="file">

    @error('file') <span class="error">{{ $message }}</span> @enderror

    <button class="btn btn-primary" type="submit">Upload</button>
</form>