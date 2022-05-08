@extends('layouts.layout')
<title>New</title>

@section('content_create')

<div class="container col-md-8 offset-md-2 my-4">
    <div class="card">
        <div class="card-header">New Data</div>

<div class="card-body">
    <div class="form-group">
      <form action="{{ route('save') }}" method="post">
        @csrf
          <div class="col-md-9 offset-md-1"> 
              <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label text-end">Name</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" name="item_name">
                  </div>
              </div>

              
              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label text-end">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="description"></textarea>
                </div>
              </div>


              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label text-end">Author</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="author">
                </div>
              </div>

              <div class="mb-3 row">
                <label class="col-sm-3 col-form-label text-end">Year</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="year">
                </div>
              </div>
              

              <div class="mb-3 row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-3">
                      <input type="submit" value="Salvar" class="btn btn-primary">
                  </div>
                  <div class="col-sm-6">
                    <a href="#" class="btn btn-secondary">Cancelar</a>
                  </div>
                      
                  </div>
              </div>
                
          </div>
      </form>
    </div> 
</div>

    </div>
</div>


@endsection