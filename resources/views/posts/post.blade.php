<article class="uk-article">
    <h1 class="uk-article-title">
                    <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                </h1>
<p class="uk-article-meta">Written by {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}.</p>
    <p>{{ $post->body }}</p>
    </p>
</article>