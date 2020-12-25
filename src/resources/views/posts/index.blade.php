<!DOCTYPE html>
<html lang="js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/_reset.css')}}">
  <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{ asset('/css/header.css')}}">
  <title>ゲームソフト投稿サイト</title>
</head>
<body>
  <header>
    <div id="header_nav">
      <div class="header_title">
        <a href="{{url('')}}">ゲームソフト投稿サイト</a>
      </div>
      <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav>
        <ul>
          <li>
            <a href="{{url('')}}">トップページ</a>
          </li>
          <li>
            <a>投稿画面メニューへ</a>
          </li>
          <!-- <li>
            <a>ログアウト</a>
          </li> -->
          <!-- <li>
            <a>マイページ</a>
          </li> -->
          <li>
            <a href="{{url('/login')}}">ログイン</a>
          </li>
          <li>
            <a href="{{url('/register')}}">新規登録</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="container">
    <main id="main">
      <div id="sidecontent">
        <div id="sidemeun">
          <h3>テスト</h3>
        </div>
      </div>
      <div class="main-body">
        <div class="card">
          <img>
        </div>
      </div>
    </main> 
  </div>
</body>
</html>