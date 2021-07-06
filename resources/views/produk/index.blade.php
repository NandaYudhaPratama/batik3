@extends('layouts.appuser')

@section('content')
 <div class="container">
 <div class="row" style="margin-top:15px;">

     @foreach($data_blog as $blog)
      <div class="col-md-3">
        <div class="card h-100 shadow p-3 bg-white rounded">
          <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded mx-auto d-block card-img-top" alt="..." style="width: 200px;">
          <div class="card-body">
            <h5 class="card-title">
              {{$blog->title}}
            </h5>
            <p class="card-text">
              {!! $blog->content !!}
            </p>
          </div>
        </div>
      </div>
       @endforeach

    </div>
 
</div>
@endsection
