@extends('app')

@section('title', 'トップページ')

@section('content')
  {{-- ヘッダー --}}
  @include('header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      {{-- トップページの画像・新着投稿 --}}
      <div class="main-container">
        <div class="img-section">
          <img src="/images/basket.jpeg" alt="" class="main-image">
        </div>
        <div class="post-section">
          <div class="post-section__title">
            <p>新着投稿</p>
          </div>
          <div class="post-content"></div>
        </div>
      </div>
  
      {{-- サイドバー --}}
      @include('sidebar')
    </div>
  </main>

    
@endsection