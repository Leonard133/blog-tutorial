@extends('layout')

@section('content')
	<div class="uk-grid" data-uk-grid-margin>
	    <div class="uk-width-medium-3-4">
	    	@foreach ($posts as $post)
	        	@include('posts.post')
	        @endforeach
	        <ul class="uk-pagination">
	            <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
	            <li class="uk-active"><span>1</span></li>
	            <li><a href="#">2</a></li>
	            <li><a href="#">3</a></li>
	            <li><a href="#">4</a></li>
	            <li><span>...</span></li>
	            <li><a href="#">20</a></li>
	            <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
	        </ul>
	    </div>
	    @include('partials.sidebar')
	</div>

@endsection 