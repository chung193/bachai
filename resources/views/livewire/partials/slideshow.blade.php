<div id="carouselExampleDark" class="carousel slide" style="padding-top: 55px">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <picture class="d-block w-100">
        <source media="(min-width:651px)" srcset="{{asset('/img/slideshow1.gif')}}" class="img-fluid">
        <source media="(min-width:300px)" srcset="{{asset('/img/slideshow1-mobile.gif')}}" class="img-fluid">

        <img src="{{asset('/img/slideshow1.gif')}}" class="d-block w-100 img-fluid " alt="...">
      </picture>
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Hơn 300 văn phòng đại lý tại 100 quốc gia</h5>
        <p>Bắc Hải logistics - An toàn nhất, tín nhiệm nhất.</p>
      </div> -->
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <picture class="d-block w-100">
        <source media="(min-width:651px)" srcset="{{asset('/img/slideshow2.gif')}}" class="img-fluid">
        <source media="(min-width:300px)" srcset="{{asset('/img/slideshow2-mobile.gif')}}" class="img-fluid">

        <img src="{{asset('/img/slideshow2.gif')}}" class="d-block w-100 img-fluid " alt="...">
      </picture>
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Dịch vụ nhanh chóng<br>An toàn<br>Đúng giờ</h5>
        <p>Cung cấp dịch vụ phù hợp cho mọi khách hàng</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <picture class="d-block w-100">
        <source media="(min-width:651px)" srcset="{{asset('/img/slideshow3.gif')}}" class="img-fluid">
        <source media="(min-width:300px)" srcset="{{asset('/img/slideshow3-mobile.gif')}}" class="img-fluid">

        <img src="{{asset('/img/slideshow3.gif')}}" class="d-block w-100 img-fluid " alt="...">
      </picture>
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Bắc Hải logistics<br>Gửi lời chúc mừng năm mới an khang thịnh vượng<br>Tới tất cả khách hàng</h5>
      </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>