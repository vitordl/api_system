@extends('layouts.layout')
<title>Page</title>

@section('content_all_view')
    <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="{{ route('index') }}">Logout</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('create') }}">Create new</a></li>
             
            </ul>
          </li>
    </ul>
@endsection

@section('content_page_view')
<div class="col-md-10 offset-md-1 my-4">
    <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Year</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach ($items as $item)
                  <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{$item->year}}</td>
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection



{{-- 
'item_name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'author' => $this->faker->name,
            'year' => $this->faker->year(), --}}