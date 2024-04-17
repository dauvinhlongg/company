@extends('master.master')


@section('content')
<div class="w-100 d-flex">
    <div class="w-75">
        @foreach($categories as $category)
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="card-title">{{$category->title}}</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($category->posts as $post)
                    <li class="list-group-item">
                        <a href="{{ route('post.show', ['id' => $post->id]) }}"
                            class="font-weight-bold">{{$post->title}}</a>
                        <p class="m-0">{{$post->content}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <div class="w-25">
        <h1 class="ps-10">Logo các đối tác</h1>
        <div class="ps-3 d-wrap">
            @foreach($image as $partner)

            <a class="ps-3" href="{{$partner->url}}"><img src="{{$partner->slide_url }}" alt=""></a>

            @endforeach
        </div>
    </div>
</div>
@endsection