<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Edit user</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <!-- <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add người dùng mới
                    </a> -->
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General infor</h2>
                <form wire:submit.prevent="update">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label> <input class="form-control" wire:input="nameChange" wire:model="user.name" id="name" type="text" placeholder="Name" required="">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                            <small id="nameHelp" class="form-text text-muted">{{$slug}}</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label> <input wire:model="user.email" class="form-control" id="email" type="email" placeholder="Email" required="">
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="desc">Description</label>
                                <textarea rows="4" class="form-control" wire:model="user.description" id="desc" placeholder="Description"></textarea>
                                @error('description')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button></div>
                </form>
            </div>

        </div>
        <div class="col-12 col-xl-4">
            <div class="row">

                <div class="col-12">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Image</h2>
                        <div class="d-flex align-items-center mb-3">

                            <div class="">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                    <div class="d-flex">
                                        <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="d-md-block text-left">
                                            <div class="text-gray small">JPG, GIF or PNG. Max size 800K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <livewire:admin.dashboard.components.upload-photo :path="$path">
                            <div class="py-2">
                                @if($image)
                                <img src="{{asset('uploads/user/'.$image)}}" class="image-fluid w-100">
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>