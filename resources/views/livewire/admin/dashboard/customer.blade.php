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
                <livewire:admin.dashboard.components.upload-excel>
                    <br>
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0">#</th>
                                <th class="border-0">Name</th>
                                <th class="border-0">Contact</th>
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
                                <td class="text-primary fw-bold">{{$count}}</td>
                                <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                                <td class="text-primary fw-bold text-wrap">{{$item->contact}}</td>
                                <td class="text-primary fw-bold text-wrap">{{$item->email}}</td>
                                <td class="text-primary fw-bold text-wrap">{{$item->phone}}</td>
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