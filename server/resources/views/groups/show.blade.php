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
          <p class="group-name">グループ1</p>
          <p class="group-member">
          test
          test2
          </p>
          </div>
        <div class="chat-header__right">
          <a href="#" class="edit-btn">編集</a>
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
        <form action="" method="post" class="chat-form">
          @csrf
          <input type="text" name="message" class="chat-message" placeholder="メッセージを入力して下さい">
          <input type="submit" value="送信する" class="chat-submit">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection