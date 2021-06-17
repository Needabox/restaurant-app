<style>
  .img-circle{
    width: 30px;
    border-radius:150px
  }
</style>
<nav class="navbar navbar-expand-lg navbar-fixed navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('dashboard')}}">PloyResto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      </ul>
      <div class="btn-group">
        <!-- <img src="{{asset('images/rafli.png')}}" class="img-circle" alt="Avatar"> -->
          <span style="color: white">Selamat Datang, &nbsp;</span><a href="#" style="text-decoration: none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: white"> {{auth()->user()->name}}</span></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{ route('logout') }}" class="dropdown-item" type="button">Logout</a>
        </div>
      </div>
      </div>
    </div>
  </nav>