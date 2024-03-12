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
            <div class="table-responsive w-100 ">
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
                            <th class="border-0">Code</th>
                            <th class="border-0">Customer</th>
                            <th class="border-0">Booking code</th>
                            <th class="border-0">Fly code</th>
                            <th class="border-0">Trip</th>
                            <th class="border-0">Booking date</th>
                            <th class="border-0">Pay deadline</th>
                            <th class="border-0">From</th>
                            <th class="border-0">To</th>
                            <th class="border-0">Pay method</th>
                            <th class="border-0">Note</th>
                            <th class="border-0">Service price</th>
                            <th class="border-0">Total</th>
                            <th class="border-0">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                        @foreach($bookings as $item)
                        <tr>
                            <td class="text-primary fw-bold">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </td>
                            <td class="text-primary fw-bold">{{$count}}</td>
                            <td class="text-primary fw-bold ">{{$item->code}}</td>
                            <td class="text-primary fw-bold ">{{$item->getCustomer->name}}</td>
                            <td class="text-primary fw-bold ">{{$item->booking_code}}</td>
                            <td class="text-primary fw-bold ">{{$item->fly_code}}</td>
                            <td class="text-primary fw-bold p">{{$item->trip}}</td>
                            <td class="text-primary fw-bold ">{{$item->booking_date}}</td>
                            <td class="text-primary fw-bold ">{{$item->pay_date}}</td>
                            <td class="text-primary fw-bold ">{{$item->from}}</td>
                            <td class="text-primary fw-bold ">{{$item->to}}</td>
                            <td class="text-primary fw-bold ">{{$item->pay_method}}</td>
                            <td class="text-primary fw-bold ">{{$item->note}}</td>
                            <td class="text-primary fw-bold ">{{number_format($item->service_price, 0, '', ',') }}</td>
                            <td class="text-primary fw-bold ">{{number_format($item->total, 0, '', ',')}}</td>
                            <td class="text-primary fw-bold ">{{$item->created_at}}</td>
                        </tr>
                        @php
                        $count +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="py-3 navigation">{{ $bookings->links('vendor.pagination.custom') }}</div>
            </div>
        </div>
    </div>

</main>