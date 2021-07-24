<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #3a6351;">
  <a class="navbar-brand" href="{{ url('/posts') }}" style="color: white;">Rangkum Carita</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('/posts') }}">Story</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('/') }}">About</a>
      </li>
    </ul>

    <ul class="nav navbar-nav ml-auto">
      <li>
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Cari Cerita" aria-label="Cari Cerita" aria-describedby="button-search" />
            <button class="btn ml-2" id="button-search" type="button" style="background-color: #f2edd7;">Go!</button>
          </div>
      </li>
    </ul>
  </div>
</nav>