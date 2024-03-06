<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Roles</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <a href="{{url('admin/dashboard/role-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#role-modal">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add role
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($roles) > 0)
                        @foreach($roles as $item)
                        <tr>
                            <td class="text-primary fw-bold text-wrap"><a href="{{url('admin/dashboard/role-permission/'.$item->name)}}">{{$item->name}}</a></td>
                            <td class="text-primary fw-bold text-wrap">{{$item->description}}</td>
                            <td class="text-primary fw-bold text-wrap">
                                <a href="{{url('admin/dashboard/give-permission/'.$item->name)}}" class="me-2 edit-button btn btn-info"><i class="fa-solid fa-wrench"></i> Set permission</a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" wire:click="editRole(`{{$item->id}}`)" data-bs-target="#role-modal-edit" class="me-2 edit-button btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <button wire:click="delete(`{{$item->id}}`)" onclick="return confirm('Are you sure delete this record??')" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3">This table is empty</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <livewire:admin.dashboard.modal.role-create>
        @include('livewire.admin.dashboard.modal.role-edit')
        <script>
            Livewire.on('reload', () => {
                var myModal = document.querySelector('#role-modal');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide()
            })
            window.addEventListener('close-modal', event => {
                $('#role-modal-edit').modal('hide');
            })
        </script>
</main>