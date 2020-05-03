@extends('app')

@section('title', '投稿一覧')

@section('content')
  {{-- ヘッダー --}}
  @include('shared/header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      <div class="main-container">
        {{-- 絞り込み --}}
        <div class="narrow-down">
          <p>絞り込み</p>
          <form action=""></form>
        </div>
        {{-- 投稿一覧 --}}
        <div class="post-section">
          <div class="post-section__title">
            <p>投稿一覧</p>
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