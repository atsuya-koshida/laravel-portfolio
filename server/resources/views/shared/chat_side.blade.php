<div class="chat-side">
  <div class="chat-side__nav">
    <p>{{ Auth::user()->name }}</p>
    <div>
      <a href="{{ route('group.create') }}" class="circle-btn circle-btn-blue"><i class="fas fa-plus"></i></a>
    </div>
  </div>
  <div class="groups">
    @foreach ($groups as $group)
    <div class="group">
      <a href="{{ route('group.show', ['group' => $group]) }}">
        <p class="group__name">{{ $group->name }}</p>
        <p class="group__latest-message">最新のメッセージ</p>
      </a>
    </div>
    @endforeach
  </div>
</div>