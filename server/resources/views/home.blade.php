@extends('app')

@section('title', 'トップページ')

@section('content')
  {{-- ヘッダー --}}
  <header class="header">
    <div class="header__left-box">
      <p class="header__title">
        Basket Ball
      </p>
    </div>
    {{-- dropdown --}}
    <ul class="header__right-box">
      <li><a href="#" class="link">マイページ</a></li>
      <li><a href="#" class="link">プロフィール編集</a></li>
      <li><a href="#" class="link">ログアウト</a></li>
    </ul>
  </header>

  <main class="main-wrapper">
    {{-- トップページの画像・新着投稿 --}}
    <div class="img-section"></div>
    <div class="post-section">
      <p class="post-section__title">新着投稿</p>
      <div class="post-content"></div>
    </div>

    {{-- サイドバー --}}
    <aside class="side-bar">
      <div class="btn-section">
        <ul class="btn-group">
          <li class="big-btn"><a href="#" class="link">メンバーを募集する</a></li>
          <li class="big-btn"><a href="#" class="link">チームを探す</a></li>
          <li class="big-btn"><a href="#" class="link">チャット</a></li>
        </ul>
      </div>
    </aside>
  </main>

    
@endsection