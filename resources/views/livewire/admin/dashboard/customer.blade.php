<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Contact</h1>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <!-- <a href="{{url('admin/dashboard/post-add')}}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-plus-circle"></i> &nbsp;Add bài viết mới
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
                <div class="row mb-5">
                    <div class="col-md-6 col-12">
                        <h2>Import file</h2>
                        <p>Import file from datacom</p>
                        <livewire:admin.dashboard.components.upload-excel>
                    </div>
                </div>

                <br>
                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <select class="form-select" aria-label="Action">
                            <option selected>Select one action</option>
                            <option value="1">Send mail</option>
                        </select>
                    </div>
                </div>
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">
                                <input class="form-check-input mt-0" type="checkbox" value="" wire:model="chooseList" aria-label="Checkbox for following text input">
                            </th>
                            <th class="border-0">#</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Contact name</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Phone</th>
                            <th class="border-0">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach($customers as $item)
                        <tr>
                            <td class="text-primary fw-bold">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </td>
                            <td class="text-primary fw-bold">{{$count}}</td>
                            <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                            <td class="text-primary fw-bold text-wrap">{{$item->contact}}</td>
                            <td class="text-primary fw-bold text-wrap"><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
                            <td class="text-primary fw-bold text-wrap"><a href="tel:{{$item->phone}}">{{$item->phone}}</a></td>
                            <td class="text-primary fw-bold text-wrap">{{$item->created_at}}</td>
                        </tr>
                        @php
                        $count +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="py-3 navigation">{{ $customers->links('vendor.pagination.custom') }}</div>
            </div>
        </div>
    </div>

</main>