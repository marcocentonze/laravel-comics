<div class="container-fluid little-top-header">
  <div class="row justify-content-end">
    <div class="col-2">
      <p>dc powered visa</p>
    </div>
    <div class="col-2 me-5">
      <p>additional dc sites</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <header id="site_header">
    <div class="container">
      <nav class="navbar navbar-expand justify-content-between p-0">
        <a class="navbar-brand" href="#">
          <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </a>



        <div class="nav navbar-nav gx-3">
          @foreach($menu_links as $menu_link)
          <li class="nav-item">
            <a class="nav-link" href="#">{{$menu_link}}</a>
          </li>
          @endforeach
        </div>


        <div class="searchbar">
          <input type="text" placeholder="Search 🔍">
        </div>

      </nav>
    </div>
  </header>
</div>