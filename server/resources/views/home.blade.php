@extends('app')

@section('title', 'トップページ')

@section('content')
  {{-- ヘッダー --}}
  @include('header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      {{-- トップページの画像 --}}
      <div class="main-container">
        <div class="img-section">
          <img src="/images/basket5.jpeg" alt="" class="main-image">
        </div>
        {{-- 新着投稿 --}}
        <div class="post-section">
          <div class="post-section__title">
            <p>新着投稿</p>
          </div>
          {{-- 記事のカード --}}
          <div class="blog-card">
            <div class="meta">
              <img src="/images/basket6.jpeg" class="photo">
              <ul class="details">
                <li class="author"><a href="#">ユーザー名</a></li>
                <li class="date">2020/5/2</li>
                <li class="tags">
                  <ul>
                    <li><a href="#">タグ</a></li>
                    <li><a href="#">タグ</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="description">
              <h1>タイトル</h1>
              <p>本文が入る</p>
              <p class="read-more">
                <a href="#">詳しく見る</a>
              </p>
            </div>
          </div>
          <div class="blog-card">
            <div class="meta">
              <img src="/images/basket6.jpeg" class="photo">
              <ul class="details">
                <li class="author"><a href="#">ユーザー名</a></li>
                <li class="date">2020/5/2</li>
                <li class="tags">
                  <ul>
                    <li><a href="#">タグ</a></li>
                    <li><a href="#">タグ</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="description">
              <h1>タイトル</h1>
              <p>本文が入る</p>
              <p class="read-more">
                <a href="#">詳しく見る</a>
              </p>
            </div>
          </div>
        </div>
      </div>
  
      {{-- サイドバー --}}
      @include('sidebar')
    </div>
  </main>

@endsection