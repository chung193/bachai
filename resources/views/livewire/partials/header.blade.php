<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary navbar-light bg-light py-0">
        <div class="container py-0">
            <a class="navbar-brand py-0" href="/">
                <img src="{{ asset('img/logo-xuan.png') }}" alt="" width="120" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item border-start">
                        <a class="nav-link fw-semibold" href="{{ url('/b') }}"><img width="30" height="25" src="{{asset('/img/flight-icon.png')}}" class="d-inline" /> Đặt vé máy bay</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{url('/')}}">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{url('/gioi-thieu')}}">Giới thiệu</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item fw-semibold" href="{{url('/dat-ve-may-bay')}}">Đặt vé máy bay</a></li>
                            <!-- <li><a class="dropdown-item fw-semibold" href="logistics">Logistics</a></li>
                            <li><a class="dropdown-item fw-semibold" href="dat-xe-chung-chuyen">Đặt xe chung chuyển</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{url('/lien-he')}}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>