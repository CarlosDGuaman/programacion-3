<!doctype html>
<html lang="en">

<head>
  <title>Proyecto</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @yield('css')
    <style>
              /* Fixed sidenav, full height */
    .sidenav {
      height: 100%;
      width: 230px;
      position: fixed;
      z-index: 1;
      top: 20;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 60px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
      padding: 25px 8px 6px 16px;
      text-decoration: none;
      font-size: 35px;
      color: #818181;
      display: block;
      border: none;
      background: none;
      width:100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    .servicios a{
      font-size: 25px;
      width: 230px;
      height: 100%;
      text-decoration: none;
      color: #818181;
      display: block;
      border: none;
      background: none;
      text-align: left;
      cursor: pointer;
      outline: none;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
    }
    
    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color: #f1f1f1;
    }

    /* Main content */
    .main {
      margin-left: 230px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 80px 10px ;
    }

    /* Add an active class to the active dropdown button */
    .active {
      background-color: green;
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: #262626;
      padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }
</style>
</head>

<body>
  <header>
    <div class="container-bg">
       <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
          <!-- Container wrapper -->
          <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="https://mdbgo.com/">
              <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="16"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
              />
            </a>

            <!-- Toggle button -->
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarButtonsExample"
              aria-controls="navbarButtonsExample"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
              <!-- Left links -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Proximamente</a>
                </li>
              </ul>
              <!-- Left links -->

              <div class="d-flex align-items-center">
                  Estas logeado
              </div>
            </div>
            <!-- Collapsible wrapper -->
          </div>
          <!-- Container wrapper -->
        </nav>
<!-- Navbar -->
   
    <div class="sidenav">
      <a href="{{route('vista')}}">Ver algo</a>
      <a href="">link :) --></a>
      <div class="dropdown">
        <a
          class=" dropdown-toggle"
          href="#"
          role="button"
          id="dropdownMenuLink"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
        link :) -->
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
        <div class="servicios">
          <li><a class="dropdown-item" href="">link :) --></a></li>
          <li><a class="dropdown-item" href="">link :) --></a></li>
          <li><a class="dropdown-item" href="">link :) --></a></li>
          </div>
        </ul>
      </div>
      <a href="">link :) --></a>
      <div class="dropdown">
        <a
          class=" dropdown-toggle"
          href="#"
          role="button"
          id="dropdownMenuLink"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
        link :) -->
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
        <div class="servicios">
          <li><a class="dropdown-item" href="">link :) --></a></li>
          <li><a class="dropdown-item" href="">link :) --></a></li>
          </div>
        </ul>
      </div>
      <a href="">link :) --></a>
      <a href="#contact">link :) --></a>
    </div>


</header>
  <main>
  <div class="main">

@yield('contenido')
</div>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  @yield('js')
</body>

</html>