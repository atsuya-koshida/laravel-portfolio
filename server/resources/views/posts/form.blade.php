@csrf
<div class="text-box">
  <label class="text-label">タイトル</label>
  <input name="title" type="text" placeholder="タイトルを入力して下さい" required value="{{ $post->title ?? old('title') }}">
</div>
<div class="text-box">
  <label class="text-label">チーム名</label>
  <input name="team_name" type="text" placeholder="チーム名を入力して下さい" required value="{{ $post->team_name ?? old('team_name') }}">
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
  <input name="activity_place" type="text" placeholder="活動場所を入力して下さい" required value="{{ $post->activity_place ?? old('activity_place') }}">
</div>
<div class="text-box">
  <label class="text-label">活動時間</label>
  <input name="activity_time" type="text" placeholder="活動時間を入力して下さい" required value="{{ $post->activity_time ?? old('activity_time') }}">
</div>
<div class="text-box">
  <p>詳しい説明</p>
  <textarea name="description" cols="20" rows="10" placeholder="詳しい説明を入力してください">{{ $post->description ?? old('description') }}</textarea>
</div>