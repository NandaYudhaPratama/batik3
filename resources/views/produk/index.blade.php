@extends('layouts.app')

@section('content')
 <div class="container">
 <div class="row" style="margin-top:15px;">

     @foreach($data_blog as $blog)
      <div class="col-md-4">
        <div class="card h-100 shadow p-3 bg-white rounded">
          <img src="{{$blog->image}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              {{$blog->nama}}
            </h5>
            <p class="card-text">
              {{$blog->content}}
            </p>
            <div class="card-footer">
            <small class="text-muted">

            </small>
            </div>
          </div>
        </div>
      </div>
       @endforeach

    </div>
 
</div>
@endsection
