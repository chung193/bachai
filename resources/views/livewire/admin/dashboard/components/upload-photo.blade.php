<form wire:submit.prevent="save" enctype="multipart/form-data">
    <input type="file" class="form-control my-2" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button class="btn btn-primary" type="submit">Upload</button>
</form>