<div class="blog-card">
  <div class="meta">
    <img src="/images/basket6.jpeg" class="photo">
    <ul class="details">
      <li class="author"><a href="#">{{ $post->user->name }}</a></li>
      <li class="date">{{ $post->created_at->format('Y/m/d H:i') }}</li>
      <li class="tags">
        <ul>
          <li><a href="#">タグ</a></li>
          <li><a href="#">タグ</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="description">
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->description)) !!}</p>
    <p class="read-more">
      <a href="{{ route('post.show', ['post' => $post]) }}">詳しく見る</a>
    </p>
  </div>
</div>