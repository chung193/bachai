<div>
    <h6 class="border-bottom d-inline">Bài viết xem nhiều</h6>
    @foreach($posts as $post)
    <div class="row border-bottom">
        <div class="col-md-4">
            <img src="{{asset('storage/posts/'.$post->img)}}" class="pt-4 pb-4 w-100">
        </div>
        <div class="col-md-8">
            <h6><a href="{{ url('p/'.$post->slug) }}">{{ $post->name }}</a></h6>
        </div>
    </div>
    @endforeach
</div>