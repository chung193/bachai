<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Users</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add user
                    </a>
                </div>
            </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive w-100 overflow-hidden ">
                @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">#</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach($users as $item)
                        <tr>
                            <td class="text-primary fw-bold">{{$count}}</td>
                            <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                            <!-- <td class="text-primary fw-bold text-wrap"><a href="{{url('a/'.$item->slug)}}" target="_blank">{{$item->slug}}</a></td> -->
                            <td class="text-primary fw-bold text-wrap">{{$item->email}}</td>
                            <td class="text-primary fw-bold">
                                <a href="javascript:void(0)" wire:click="editPassword(`{{$item->id}}`)" data-bs-toggle="modal" data-bs-target="#change-password-modal" class="me-2 edit-button btn btn-info text-white"><i class="fas fa-sync-alt"></i> Change Password</a>
                                <a href="{{url('admin/dashboard/user-permission/'.$item->slug)}}" class="me-2 edit-button btn btn-success text-white"><i class="fas fa-unlock"></i> Role</a>
                                <a href="{{url('admin/dashboard/user-edit/'.$item->slug)}}" class="me-2 edit-button btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <button wire:click="delete(`{{$item->id}}`)" onclick="return confirm('Are you sure delete this user?')" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
                            </td>
                        </tr>
                        @php
                        $count +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="py-3">{{ $users->links() }}</div>
                @include('livewire.admin.dashboard.modal.change-password')
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('close-modal', event => {
            $('#change-password-modal').modal('hide');
        })
    </script>
</main>