<div class="container-fluid pt-4 pb-4">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-md-8 col-12">
                <livewire:partials.breadcrumb :current="$name" :created="$created" />
                <h1><strong>{{$name}}</strong></h1>
                <img src="{{asset('storage/posts/'.$img)}}" class="pt-4 pb-4 w-100">
                {!!($content)!!}
                <livewire:partials.share :url="$slug" />
            </div>
            <div class="col-md-4 col-12">
                <livewire:partials.hpny />
                <livewire:partials.post-related />
            </div>
        </div>
    </div>
</div>