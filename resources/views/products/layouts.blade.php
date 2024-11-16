<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand text-uppercase" href="/">            
              <strong>SuperMarket</strong> 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              
          <!-- /.navbar-header -->
          <div class="collapse navbar-collapse" id="navbar-toggler">
            <ul class="navbar-nav">
              {{-- @if (Auth::check()) --}}
              {{-- @auth
              <li class="nav-item @if(request()->is('companies*')) @endif"><a href="{{route('companies.index')}}" class="nav-link">Companies</a></li>
              <li class="nav-item @if(request()->is('contacts*')) @endif"><a href="{{route('contacts.index')}}" class="nav-link">Contacts</a></li>
              @endauth --}}
            </ul>
            {{-- <ul class="navbar-nav ml-auto">
              @guest
                <li class="nav-item mr-2">
                  <a href="#" class="btn btn-outline-secondary">
                    Login
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="btn btn-outline-primary">
                    Register
                  </a>
                </li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('user-profile-information.edit')}}">Profile</a>
                    <form action="{{route('logout')}}" method="POST" style="display: inline;">
                      @csrf
                      <button class="dropdown-item">Logout</button>
                    </form>
                  </div>
                </li>
              @endguest
            </ul> --}}
          </div>
        </div>
      </nav> 
       <div class="container">
        @yield('content')
       </div>
</body>
</html>
