@extends('layouts')

@section('content')

<div id="container">
  <div id="main">
    <div id="sidecontent">
      <div id="sidemeun">
        <h3>テスト</h3>
      </div>
    </div>
    <div class="main-body">
      @foreach($posts as $post)
      <div class="card">
      <img src="{{$post->image}}" alt="..." class="img-thumbnail">
        <div class="card-body">
          <h5 class="card-title">
            {{$post->title}}
          </h5>
          <span class="card-price">¥{{$post->price}}</span>
          <div class="border border-white mt-4">
            <a href="{{}}" class="btn btn-primary">詳細へ</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div> 
</div>

@endsection('content')