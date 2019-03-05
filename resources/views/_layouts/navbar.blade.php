<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{-- <a class="navbar-brand brand" href="#">Standar Pelayanan Minimal</a> --}}
      <a href="" class="navbar-brand brand">
        {{-- Sistem Pendukung Keputusan Metode SAW --}}
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ukuran-huruf">
        <li><a href="{{url('dashboard')}}" style="font-size:25px">Testing</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right ukuran-huruf">
        @if(Auth::user())
          <li>
            <a href="{{url('/logout')}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="font-header">
                    Keluar
            </a>

            <form id="logout-form" action="{{url('/logout')}}" method="POST" >
                {{ csrf_field() }}
            </form>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>