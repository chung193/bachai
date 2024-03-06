<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Post</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add Post
                    </a>
                </div>
            </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group me-2 me-lg-3 fmxw-400">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" wire:model="searchPost" wire:input="searchUpdate" placeholder="Search Post">
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <div class="dropdown">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0" style="">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10
                            <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="dropdown-item fw-bold" href="#">20</a>
                        <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive w-100 overflow-hidden ">
                <p>Total {{$count}}</p>
                @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">#</th>
                            <th class="border-0">Image</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Slug</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach($listPost as $item)
                        <tr>
                            <td class="text-primary fw-bold">{{$count}}</td>
                            <td class="text-primary fw-bold p-0 py-2" style="max-width: 200px"><img src="{{asset('uploads/post/'.$item->image)}}"> </td>
                            <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                            <td class="text-primary fw-bold text-wrap"><a href="{{url($item->slug)}}" target="_blank">{{$item->slug}}</a></td>
                            <td class="text-primary fw-bold">
                                <a href="{{url('admin/dashboard/post-edit/'.$item->slug)}}" class="me-2 edit-button btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <button wire:click="delete(`{{$item->id}}`)" onclick="return confirm('Are you sure delete this record?')" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
                            </td>
                        </tr>
                        @php
                        $count +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="py-3 navigation">{{ $listPost->links('vendor.pagination.custom') }}</div>
            </div>
        </div>
    </div>

</main>