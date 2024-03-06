<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Users</h1>
                    <p class="mb-0"></p>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General infor</h2>
                <form wire:submit.prevent="add">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label> <input class="form-control" wire:model="name" id="name" type="text" placeholder="Name" required="">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label> <input wire:model="email" class="form-control" id="email" type="email" placeholder="Email" required="">
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password">Password</label> <input wire:model="password" class="form-control" id="password" type="password" placeholder="password" required="">
                            @error('password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cfpassword">Confirm password</label> <input wire:model="cfpassword" class="form-control" id="cfpassword" type="password" placeholder="confirm password" required="">
                            @error('cfpassword')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
</main>