<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Options</h1>
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
                @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
                @endif
                <form wire:submit.prevent="update">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label> <input class="form-control" wire:model="option.name" id="name" type="text" placeholder="Name" required="">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="google_analytics">Google analytics</label>
                            <input wire:model="option.google_analytics" class="form-control" id="google_analytics" type="text" placeholder="google_analytics" required="">
                            @error('google_analytics')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description">Description</label>
                            <textarea rows="4" wire:model="option.description" class="form-control" id="description" placeholder="description"></textarea>
                            @error('description')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="facebook_plugin_code">Facebook plugin code</label>
                            <input wire:model="option.facebook_plugin_code" class="form-control" id="facebook_plugin_code" type="text" placeholder="facebook plugin code" required="">
                            @error('facebook_plugin_code')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="facebook_url">Facebook Url</label>
                            <input wire:model="option.facebook_url" class="form-control" id="facebook_url" type="text" placeholder="facebook_url" required="">
                            @error('facebook_url')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="github_url">Github Url</label>
                            <input wire:model="option.github_url" class="form-control" id="github_url" type="text" placeholder="github_url" required="">
                            @error('github_url')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="linkedin_url">Linkedin Url</label>
                            <input wire:model="option.linkedin_url" class="form-control" id="linkedin_url" type="text" placeholder="linkedin_url" required="">
                            @error('linkedin_url')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button></div>

                </form>
            </div>
        </div>
</main>