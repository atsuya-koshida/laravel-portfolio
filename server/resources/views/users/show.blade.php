@extends('app')

@section('title', 'マイページ')

@section('content')
  {{-- ヘッダー --}}
  @include('shared/header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      <div class="main-container">
        {{-- ユーザー情報 --}}
        <div class="user-section">
          <div class="user-section__top">
            <div class="user-section__top--left">
              <div class="user-image">
                <img src="/images/noimageblack.png" alt="noimage">
              </div>
              <p>{{ $user->name }}</p>
            </div>
            {{-- フォローボタン --}}
            @if( Auth::id() !== $user->id )
            <follow-button
            >
            </follow-button>
            @endif
          </div>
          <div class="user-section__bottom">
            <p class="user-position">ポジション：PG</p>
            <p class="user-follow">フォロー：<a href="#">10</a></p>
            <p class="user-follower">フォロワー：<a href="#">10</a></p>
          </div>
        </div>
        <div class="post-section">
          <div class="post-section__title">
            <p>{{ $user->name }}の投稿一覧</p>
          </div>
          {{-- 記事のカード --}}
          @foreach ($posts as $post)
          @include('shared/card')
          @endforeach
        </div>
      </div>
      {{-- サイドバー --}}
      @include('shared/sidebar')
    </div>
  </main>
@endsection