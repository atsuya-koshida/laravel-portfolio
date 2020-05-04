@extends('app')

@section('title', 'トップページ')

@section('content')
  {{-- ヘッダー --}}
  @include('shared/header')

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
          @include('shared/card')
        </div>
      </div>
      {{-- サイドバー --}}
      @include('shared/sidebar')
    </div>
  </main>
@endsection