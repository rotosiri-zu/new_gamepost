@extends('layouts')

@section('content')

  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        投稿の新規作成
      </h1>

      <form method="POST" action="{{ route('posts.store') }}">
        {{ csrf_field() }}

        <fieldset class="mb4">
          <div class="form-group">
          <label for="basic-url">image URL</label>
          <input id="image" name="image" type="text" class="form-control" aria-describedby="basic-addon3">
          </div>
          <div class="form-group">
            <label for="title">タイトル</label>
            <input id="title" name="title" type="text">
          </div>
          <div class="form-group">
            <label for="genre">ジャンル</label>
            <select id="genre_id" name="genre_id" class="form-control">
          @foreach ($genres as $id => $genre_name)
              <option value="{{$id}}">{{$id}} {{$genre_name}}</option>
          @endforeach
            </select>
          </div>
          <div class="form-group">
            <span class="form-group-text">¥</span>
            <input id="price" name="price" type="text">
          </div>
          <div class="form-group">
            <label for="title">ゲームの説明文</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <a href="{{route('top')}}">キャンセル</a>

          <button type="submit" class="btn btn-primary">
            投稿する
          </button>

        </fieldset>
      </form>
    </div>
  </div>

@endsection('content')