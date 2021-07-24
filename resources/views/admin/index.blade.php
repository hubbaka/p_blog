@extends('home')

@section('main')
<!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    
                    @foreach($posts as $posts)
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->  
                            <h1 class="fw-bolder mb-1">{{ $posts->title }}</h1>
                        </header>
                        <div class="card mb-3" style="max-width: auto; border: none;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="{{ asset('img/' . $posts->post_image) }}" class="card-img" alt="Responsive image">
                            </div>
                            <div class="col-md-8">
                              <div class="px-3">
                                <p class="card-text">{{ Str::limit($posts->description, 180) }}</p>
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                    <p class="card-text"><small class="text-muted">Posted on {{ $posts->created_at }} by {{ $posts->author }}</small></p></div>
                                    <div class="col-md-4">
                                    <a href="{{ route('posts.show', $posts->id) }}" class="btn ml-2" style="background-color: #f2edd7;">Go Read</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </article>
                    @endforeach

                </div>
            </div>
        </div>
        
        
@stop
@section('footer')
    @include('layout.footer')
@stop
</body>
</html>
