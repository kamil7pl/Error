<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link href="{{asset('/css/app.css')}}" rel="stylesheet">



    <title>@yield('title')</title>

  </head>

  <body>

    <div class="container">

        <h1>@yield('title')</h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">


          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>



          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

              

              <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  Programming

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTwo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Laravel
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownTwo">
                    <a class="dropdown-item" href="#">Introduction Laravel</a>
                    <a class="dropdown-item" href="#">Installing Laravel</a>
                  </div>

                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownThree" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Python
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownThree">
                    <a class="dropdown-item" href="#">Introduction Python</a>
                    <a class="dropdown-item" href="#">Installing Python</a>
                  </div>
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFour" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Java
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownFour">
                    <a class="dropdown-item" href="#">Introduction Java</a>
                    <a class="dropdown-item" href="#">Installing Java</a>
                  </div>
                </div>

              </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">

              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>

          </div>

        </nav>
        @yield('content')

    </div>

	<script src="{{asset('/js/app.js')}}"></script>

  </body>

</html>
