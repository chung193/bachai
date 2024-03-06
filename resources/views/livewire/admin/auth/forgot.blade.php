<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
        <h1 class="h3">Forgot Password?</h1>
        <p class="mb-4">Don't worry! Enter your email!</p>
        @if ($status)
        <div class="text-success">{{ $status }}</div>
        @endif
        <form wire:submit.prevent="submit">
            <!-- Form -->
            <div class="mb-4">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="john@company.com" required="" autofocus="">
                </div>
            </div>
            <!-- End of Form -->
            <div class="d-grid">
                <button type="submit" class="btn btn-gray-800">Get new Password</button>
            </div>
        </form>
    </div>
</div>