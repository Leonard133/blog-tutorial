@extends('layout')

@section('content')
	<h1>Register</h1>
	<form class="uk-form uk-form-horizontal" method="POST" action="/register">
		{{ csrf_field() }}
	    <div class="uk-form-row">
	        <label class="uk-form-label">Name :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
                    <input type="text" class="uk-width-1-1" id="name" name="name" />
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label class="uk-form-label">Email :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
	            	<input type="email" class="uk-width-1-1" id="email" name="email"/>
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label class="uk-form-label">Password :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
	            	<input type="password" class="uk-width-1-1" id="password" name="password"/>
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label class="uk-form-label">Password Confirmation :</label>
	        <div class="uk-form-controls">
	            <div class="uk-grid">
	            	<input type="password" class="uk-width-1-1" id="password_confirmation" name="password_confirmation" />
	            </div>
	        </div>
	    </div>
	    <div class="uk-form-row">
            <button type="submit" class="uk-button uk-button-primary">Register</button>
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