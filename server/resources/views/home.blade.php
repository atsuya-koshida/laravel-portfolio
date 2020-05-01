@extends('app')

@section('title', 'トップページ')

@section('content')
  {{-- ヘッダー --}}
  @include('header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      {{-- トップページの画像・新着投稿 --}}
      <div class="main-container">
        <div class="img-section"></div>
        <div class="post-section">
          <p class="post-section__title">新着投稿</p>
          <div class="post-content"></div>
        </div>
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
    </div>
  </main>

    
@endsection