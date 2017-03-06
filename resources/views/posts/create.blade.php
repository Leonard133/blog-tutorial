@extends('layout')

@section('content')
	<h1>Create a Post</h1>
	<form class="uk-form uk-form-horizontal" method="POST" action="/posts">
		{{ csrf_field() }}
	    <div class="uk-form-row">
	        <label class="uk-form-label">Title :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
                    <input type="text" class="uk-width-1-1" id="name" name="title" placeholder="Title" />
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label class="uk-form-label">Body :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
	            	<textarea rows="5" name="body" id="body" class="uk-width-1-1"></textarea>
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
            <button type="submit" class="uk-button uk-button-primary">Publish</button>
	    </div>
	    @if (count($errors))
			<div class="uk-form-row">
			    <div class="uk-alert uk-alert-danger">
			    	<ul>
			    		@foreach ($errors->all() as $error)
			    			<li>{{ $error }}</li>
			    		@endforeach
			    	</ul>
			    </div>
			</div>
	    @endif
	</form>
@endsection