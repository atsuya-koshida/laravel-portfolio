@extends('app')

@section('title', 'メンバー募集作成')

@section('content')
    @include('shared/header')

    <main class="main-wrapper">
      <div class="main-wrapper__inner">
        <div class="main-container">
          <div class="post-section">
            <div class="post-section__title">
              <p>チーム募集を作成</p>
            </div>
            <form action="" method="POST">
              <div class="text-box">
                <label class="text-label">タイトル</label>
                <input type="text" placeholder="タイトルを入力して下さい">
              </div>
              <div class="text-box">
                <label class="text-label">チーム名</label>
                <input type="text" placeholder="チーム名を入力して下さい">
              </div>
              <div class="select-box selected">
                <select>
                  <option value="" hidden>都道府県を選んでください</option>
                  <option value="1">北海道</option>
                  <option value="2">東京</option>
                  <option value="3">名古屋</option>
                  <option value="4">大阪</option>
                </select>
              </div>
              <div class="text-box">
                <label class="text-label">活動場所</label>
                <input type="text" placeholder="活動場所を入力して下さい">
              </div>
              <div class="text-box">
                <label class="text-label">活動時間</label>
                <input type="text" placeholder="活動時間を入力して下さい">
              </div>
              <div class="text-box">
                <p>詳しい説明</p>
                <textarea name="description" cols="20" rows="10" placeholder="詳しい説明を入力してください"></textarea>
              </div>
              <div class="submit-box">
                <input type="submit" value="投稿する" class="submit-btn">
              </div>
            </form>
          </div>
        </div>
        @include('shared/sidebar')
      </div>
    </main>
@endsection