@extends('app')

@section('title', 'メンバー募集詳細')

@section('content')
    @include('shared/header')

    <main class="main-wrapper">
      <div class="main-wrapper__inner">
        <div class="main-container">
          <div class="post-section">
            <div class="post-section__title">
              <p>タイトル</p>
            </div>
          </div>
        </div>
        @include('shared/sidebar')
      </div>
    </main>
@endsection