<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Profile</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <!-- <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add
                    </a> -->
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General infor</h2>
                @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <form wire:submit.prevent="update">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div><label for="name">Name</label>
                                <input class="form-control" id="name" wire:model="user.name" type="text" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="email">Email</label>
                                <input class="form-control" id="email" wire:model="user.email" type="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="desc">Description</label>
                                <textarea class="form-control" id="desc" wire:model="user.description" placeholder="Description " rows="4"> </textarea>
                            </div>
                        </div>
                    </div>

                    <!-- <h2 class="h5 mb-4">Change password</h2>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email">Old password</label>
                            <input class="form-control" id="email" type="password" placeholder="Old password" required="">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email">New password</label>
                            <input class="form-control" id="email" type="password" placeholder="New password" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email">Confirm new password</label>
                            <input class="form-control" id="email" type="password" placeholder="Confirm new password" required="">
                        </div>
                    </div> -->
                    <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button></div>
                </form>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg" style="background: url(&quot;../assets/img/profile-cover.jpg&quot;);"></div>
                        <div class="card-body pb-5"><img src="{{asset('uploads/user/'.$user->image)}}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{$user->name}}</h4>
                            <p class="fw-normal">{{$user->description}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="card shadow border-0 p-0">
                        <div class="card-body pb-5">
                            <h2 class="h5 mb-4">Image</h2>
                            <livewire:admin.dashboard.components.upload-photo :path="$path">
                                @if($image)
                                <img src="{{asset('uploads/post/'.$image)}}">
                                @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>