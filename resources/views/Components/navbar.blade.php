<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="row w-100 align-items-center justify-content-between">
        <div class="col-2">
        <a href="{{route('HomePage')}}"><img src="/media/sushilogo.png" height="100px" width="100px" alt="SushiLogo"></a>
        </div>
        <button class="navbar-toggler w-25 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span ><i class="bi bi-list p-5"></i></span>
        </button>
        <div class="col-12 col-md-8 d-flex justify-content-end">
    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex align-items-end justify-content-around">
        <li class="nav-item my-1">
          <a class="nav-link" href="{{route('Menu')}}">Menu</a>
        </li>
        <li class="nav-item my-1">
          <a class="nav-link" href="{{route('Location')}}">Location</a>
        </li>
        <li class="nav-item my-1">
          <a class="nav-link" href="{{route('Services')}}">Servizi</a>
        </li>
        <li class="nav-item my-1">
          <a class="nav-link" href="{{route('AYCE')}}">All You Can Eat</a>
        </li>
        <li class="nav-item my-1">
          <a class="nav-link" href="{{route('ContactUs')}}">Contatti</a>
        </li>
      </ul>
    </div>
        </div>
    </div>
    
    
  </div>
</nav>