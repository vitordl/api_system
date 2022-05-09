@extends('layouts.layout')
<title>Login</title>


@section('content')
<div class="card-header">Login</div>

<div class="card-body">
    <div class="form-group">
      <form action="{{ route('logged_in') }}" method="post">
        @csrf
          <div class="col-md-8 offset-md-2"> 
              <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label text-end">User</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" name="user">
                  </div>
              </div>

              <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label text-end">Password</label>
                  <div class="col-sm-9">
                  <input type="password" class="form-control" name="password">
                  </div>
              </div>

              <div class="mb-3 row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label" >
                          Remember me
                          </label>
                      </div>   
                  </div>
              </div>

              <div class="mb-3 row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-3">
                      <input type="submit" value="Login" class="btn btn-primary">
                  </div>
                  <div class="col-sm-6">
                      <a href="#" class="nav-link">Forgot your password?</a>
                  </div>
                      
                  </div>
              </div>
                
          </div>
      </form>
    </div> 
</div>

@endsection


