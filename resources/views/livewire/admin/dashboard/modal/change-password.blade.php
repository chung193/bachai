<div wire:ignore.self class="modal fade" id="change-password-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h4 modal-title">
                    Change password for {{$name}}
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updatePassword" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter new password:</label>
                        <input type="password" wire:model="password" class="form-control" autofocus>
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit">Update</button>
                    <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

</div>