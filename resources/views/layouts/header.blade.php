<header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/header.png')}}" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <li class="{{set_active('/')}} nav-item">
              <a class="nav-link" href="{{ url('/') }}">ホーム</a>
            </li>
            <li class="nav-item {{set_active('lembaga')}}">
              <a class="nav-link" href="{{ url('lembaga') }}">教育機関について</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('siswa') }}">生徒たちについて</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('kurikulum') }}">教育のキャリクラム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('alur') }}">送り出しフロー</a>
            </li>
            <li class="nav-item">
              <div style="position: fixed;">
                <a href="{{url('http://id.gifargakuincenter.org')}}">ID<img src="{{ asset('img/indonesia.png')}}"></a>
                <b><a href="{{url('/')}}">JP<img src="{{ asset('img/japan.png')}}"></a></b>
              </div>
            </li>
          </ul>
        </div>
      </nav>
  </header>