@extends('app')

@section('title', 'チャットグループ編集')

@section('content')
    @include('shared/header')

    <main class="main-wrapper">
      <div class="main-wrapper__inner">
        <div class="main-container">
          <div class="group-section new-group">
            <div class="group-section__title">
              <p>チャットグループを作成</p>
            </div>
            <form action="{{ route('group.update', ['group' => $group]) }}" method="POST">
              @method('PATCH')
              @csrf
              <div class="text-box">
                <label class="text-label">グループ名</label>
                <input name="name" type="text" placeholder="グループ名を入力して下さい" required value="{{ $group->name ?? old('name') }}">
              </div>
              <div class="search-box">
                <label class="text-label">ユーザーを追加</label>
                <input type="text" placeholder="検索">
                <i class="fas fa-search"></i>
              </div>
              <div class="submit-box">
                <input type="submit" value="更新する" class="submit-btn">
              </div>
            </form>
          </div>
        </div>
        @include('shared/sidebar')
      </div>
    </main>
@endsection