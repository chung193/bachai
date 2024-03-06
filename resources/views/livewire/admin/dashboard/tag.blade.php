<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tag</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tag-modal" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fa-solid fa-circle-plus"></i>
                        &nbsp;Add tag
                    </a>
                </div>
            </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">#</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Slug</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach($tags as $item)
                        <tr>
                            <td class="text-primary fw-bold">{{$count}}</td>
                            <td class="text-primary fw-bold">{{$item->name}}</td>
                            <td class="text-primary fw-bold">{{$item->slug}}</td>
                            <td class="text-primary fw-bold">
                                <button class="me-2 edit-button btn btn-secondary" wire:click="editTag(`{{$item->id}}`)" data-bs-toggle="modal" data-bs-target="#tag-modal-edit"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                <button wire:click="delete(`{{$item->id}}`)" onclick="return confirm('Are you sure delete this record??')" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
                            </td>
                        </tr>
                        @php
                        $count +=1;
                        @endphp

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <livewire:admin.dashboard.modal.tag-create />
    @include('livewire.admin.dashboard.modal.tag-edit')
    <script>
        Livewire.on('reload', () => {
            var myModal = document.querySelector('#tag-modal');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide()
        })
        window.addEventListener('close-modal', event => {
            $('#tag-modal-edit').modal('hide');
        })
    </script>
</main>