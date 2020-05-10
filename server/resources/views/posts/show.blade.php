@extends('app')

@section('title', 'メンバー募集詳細')

@section('content')
    @include('shared/header')

    <main class="main-wrapper">
      <div class="main-wrapper__inner">
        <div class="main-container">
          <div class="post-section">
            <div class="post-section__title">
              <p style="border: none;">募集詳細</p>
            </div>
            <div class="post-section__btn">
              <form action="{{ route('post.edit', ['post' => $post]) }}">
                <button class="edit-btn">編集</button>
              </form>
              {{-- <a href="{{ route('post.edit', ['post' => $post]) }}" class="edit-btn">編集</a> --}}
              <form method="POST" action="{{ route('post.destroy', ['post' => $post]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn" onclick='return confirm("本当に削除しますか？");'>削除</button>
              </form>
            </div>
            <table>
              <tr>
                <th>投稿者</th>
                <td><a href="#">{{ $post->user->name }}</a></td>
              </tr>
              <tr>
                <th>タイトル</th>
                <td>{{ $post->title }}</td>
              </tr>
              <tr>
                <th>チーム名</th>
                <td>{{ $post->team_name }}</td>
              </tr>
              <tr>
                <th>都道府県</th>
                <td>都道府県が入ります</td>
              </tr>
              <tr>
                <th>活動場所</th>
                <td>{{ $post->activity_place }}</td>
              </tr>
              <tr>
                <th>活動時間</th>
                <td>{{ $post->activity_time }}</td>
              </tr>
              <tr>
                <th>詳しい説明</th>
                <td>{!! nl2br(e($post->description)) !!}</td>
              </tr>
            </table>
            <div class="comment-box">
              <form action="" method="POST" class="comment-form">
                <textarea name="text"cols="30" rows="2" placeholder="コメントする"></textarea>
                <input type="submit" value="コメントする">
              </form>
              <div class="comments">
                <p class="comments__title">＜コメント一覧＞</p>
                <p class="comment"><a href="#">ユーザー名</a>:
                  本文
                </p>
              </div>
            </div>
          </div>
        </div>
        @include('shared/sidebar')
      </div>
    </main>
@endsection