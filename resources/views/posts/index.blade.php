@extends('home')

@section('main')
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <div class="content">
                @foreach($posts as $post)
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                    </header>
                    <div class="card mb-3" style="max-width: auto; border: none;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{url('/img/'.$post->post_image)}}" class="card-img" alt="Responsive image">
                            </div>
                            <div class="col-md-8">
                                <div class="px-3">
                                    <p class="card-text">{{ Str::limit($post->description, 180) }}</p>
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <p class="card-text"><small class="text-muted">Posted on
                                                    {{ $post->created_at }} by {{ $post->author }}</small></p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn ml-2"
                                                style="background-color: #f2edd7;">Go Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>


            <div class="content-sc mb-5">
                <header class="mb-4">
                        <h3 class="fw-bolder mb-1">Story</h3>
                    </header>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    
                        <div class="carousel-item active">
                            <img src="{{url('/img/hubbaka.png')}}" class="d-block w-100" alt="..." style="height: ;">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    @foreach($posts1 as $post1)
                        <div class="carousel-item">
                            <a href="{{ route('posts.show', $post1->id) }}"><img src="{{url('/img/'.$post1->post_image)}}" class="d-block w-100" alt="..."></a>
                            <div class="carousel-caption d-md-block">
                                <p>{{ Str::limit($post1->description, 180) }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        @include('layout.side')
    </div>
</div>

@stop
@section('footer')
@include('layout.footer')
@stop
</body>

</html>
