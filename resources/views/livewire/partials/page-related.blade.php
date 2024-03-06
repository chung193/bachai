<div>
    <h6 class="border-bottom d-inline">Nổi bật</h6>
    @foreach($pages as $page)
    <div class="row border-bottom">
        <div class="col-md-4">
            <img src="{{asset('storage/pages/'.$page->img)}}" class="pt-4 pb-4 w-100">
        </div>
        <div class="col-md-8">
            <h6><a href="{{ url($page->slug) }}">{{ $page->name }}</a></h6>
        </div>
    </div>
    @endforeach
</div>