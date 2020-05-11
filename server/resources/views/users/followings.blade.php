@extends('app')

@section('title', 'マイページ')

@section('content')
  {{-- ヘッダー --}}
  @include('shared/header')

  <main class="main-wrapper">
    <div class="main-wrapper__inner">
      <div class="main-container">
        {{-- ユーザー情報 --}}
        <p class="user-section__title">{{ $user->name }}のフォロー</p>
        <div class="user-section">
          @foreach ($followings as $user)
          <div class="user-section__top" style="margin-bottom: 15px;">
            <div class="user-section__top--left">
              <div class="user-image">
                <img src="/images/noimageblack.png" alt="noimage">
              </div>
              <p>{{ $user->name }}</p>
            </div>
            {{-- フォローボタン --}}
            @if( Auth::id() !== $user->id )
            <follow-button
            :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
            :authorized='@json(Auth::check())'
            endpoint="{{ route('user.follow', ['user' => $user]) }}"
            >
            </follow-button>
            @endif
          </div>
          @endforeach
        </div>
      </div>
      {{-- サイドバー --}}
      @include('shared/sidebar')
    </div>
  </main>
@endsection