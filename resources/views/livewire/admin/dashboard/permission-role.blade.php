<main class="">
    <div class="py-4">
        <livewire:admin.partials.breadcrumb :breadcrumb="$breadcrumb">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Permission of role {{$role->name}}</h1>
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
                            <th class="border-0">Name</th>
                            <th class="border-0">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        @endphp
                        @foreach($permissions as $item)
                        <tr>
                            <td class="text-primary fw-bold text-wrap">{{$item->name}}</td>
                            <td class="text-primary fw-bold text-wrap">{{$item->description}}</td>
                        </tr>
                        @php
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>