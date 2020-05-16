@extends('app')

@section('title', 'チャット画面')

@section('content')
<div class="wrapper">
  @include('shared/header')
  <div class="chat-wrapper">
    @include('shared/chat_side')
    
    <div class="chat-main">
      <div class="chat-header">
        <div class="chat-header__left">
          <p class="group-name">{{ $group->name }}</p>
          <p class="group-member">
            メンバー：
          @foreach($group->users as $user)
         {{  $user->name }}
          @endforeach
          </p>
          </div>
        <div class="chat-header__right">
          <a href="{{ route('group.edit', ['group' => $group]) }}" class="edit-btn">編集</a>
        </div>
      </div>
      <div class="chat-messages">
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
        <div class="message">
          <div class="message__info">
            <p class="user-name">ユーザー名</p>
            <p class="send-time">2020/5/5 8:10</p>
          </div>
          <div class="message__desc">ここに投稿内容が入ります</div>
        </div>
      </div>
      <div class="chat-form-box">

        <form action="{{ route('message.store', ['group' => $group]) }}" method="POST" class="chat-form">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <input type="hidden" name="group_id" value="{{ $group->id }}">
          <input type="text" name="text" class="chat-message" placeholder="メッセージを入力して下さい">
          <input type="submit" value="送信する" class="chat-submit">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection