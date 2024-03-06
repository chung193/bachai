<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Assign permission</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <!-- <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp; Gán quyền
                    </a> -->
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
                            <th class="border-0">Summary</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form wire:submit.prevent="add">
                            @php
                            @endphp
                            @foreach($permissions as $item)
                            <tr>
                                <td class="text-primary fw-bold text-wrap">
                                    <div class="form-check">
                                        <input wire:model.defer="select" class="form-check-input" value="{{$item->id}}" type="checkbox" id="flexCheckDefault">
                                    </div>
                                </td>
                                <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                                <td class="text-primary fw-bold text-wrap">{{$item->name_guard}}</td>

                                <td class="text-primary fw-bold">
                                    <a href="{{url('admin/dashboard/post-edit/'.$item->slug)}}" class="me-2 edit-button btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <button wire:click="delete(`{{$item->id}}`)" onclick="return confirm('Are you sure delete this record??')" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
                                </td>
                            </tr>
                            @php
                            @endphp
                            @endforeach
                    </tbody>
                </table>

                <button class="btn btn-primary delete-button my-4" type="submit"> Save</button>
                </form>
            </div>
        </div>
    </div>

</main>