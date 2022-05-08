@extends('layouts.layout')
<title>LoggedIn</title>

@section('content_user_logged_in')
    <ul class="navbar-nav ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ $user }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('get_all_data') }}">Dashboard | Data</a></li>
                  
                </ul>
              </li>
    </ul>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            You are logged in!
        </div>
    </div>
@endsection