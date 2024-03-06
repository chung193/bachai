<section class="our_blog_area clearfix section-padding-100" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">

                    <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                        <span class="">Bài viết</span>
                    </div>
                    <h2 class="fadeInUp d-blue" data-wow-delay="0.3s">Bài viết mới nhất</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">
                        Một số bài viết, thông tin chúng tôi chọn lọc, hy vọng sẽ hữu ích đối với quý khách hàng
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($posts as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="{{asset('storage/posts/'.$item->img)}}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta mt-20">
                            <p><a href="{{ url('p/'.$item->slug) }}">{{ $item->created_at }}</a> </p>
                        </div>
                        <a href="{{ url('p/'.$item->slug) }}" class="post-title">
                            <h4>{{ $item->name }}</h4>
                        </a>
                        <p>{{ $item->summary }}</p>
                        <a class="more-info" href="{{ url('p/'.$item->slug) }}">Đọc tiếp <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- Single Blog Post -->

        </div>
    </div>
</section>