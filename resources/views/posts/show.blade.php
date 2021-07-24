@extends('home')

@section('main')
<!-- Page content-->
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->  
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <hr>
                            <div class="text-muted fst-italic mb-2">Posted on {{ $post->created_at }} by {{ $post->author }}</div>
                            <hr>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img src="{{url('/img/'.$post->post_image)}}" class="card-img" alt="Responsive image"></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $post->description }}</p>
                        </section>

                        <a class="btn mb-5" href="https://www.instagram.com/p/B4KLXOalpqn" style="background-color: #f2edd7;"> Klick for Comment Story </a>
                    </article>
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