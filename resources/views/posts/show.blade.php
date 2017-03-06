@extends('layout')

@section('content')
	<div class="uk-grid" data-uk-grid-margin>
	    <div class="uk-width-medium-3-4">
	        <article class="uk-article">
	            <h1 class="uk-article-title">
		                    <a href="#">{{ $post->title }}</a>
		                </h1>
	            <p class="uk-article-meta">Written on {{ $post->created_at->toFormattedDateString() }}.</p>
	            <p>{{ $post->body }}</p>
	            </p>
	        </article>
	        @if (count($post->comments))
	        <hr>
		        <h3>Comments:</h3>
		        <div class="comments">
		        	<ul class="uk-list">
			        	@foreach ($post->comments as $comment)
			        		<li class="uk-panel uk-panel-box uk-margin">
				        		<strong>
				        			{{ $comment->created_at->diffForHumans() }} : &nbsp;
				        		</strong>
		        				{{ $comment->body }}
			        		</li>
			        	@endforeach
			        </ul>
		        </div>
	        @endif
	        <hr>
	        <h3>Leave a comment:</h3>
	     	<form class="uk-form" method="POST" action="/posts/{{ $post->id }}/comments">
				{{ csrf_field() }}
     	        <div class="uk-form-row">
					<textarea class="uk-width-1-1" rows="5" name="body" placeholder="Your comment..."></textarea>
     	        </div>
        	    <div class="uk-form-row">
                    <button type="submit" class="uk-button uk-button-primary">Add Comment</button>
        	    </div>
	     	</form>
	    </div>
	    @include('partials.sidebar')
@endsection