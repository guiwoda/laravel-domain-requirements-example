@extends('layouts.default')

@section('content')

@foreach($posts as $post)
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{{ $post->title }}} <small>by {{{ $post->user->email }}}</small></h3>
	</div>
	<div class="panel-body">
		<p>{{{ $post->message }}}</p>
	</div>
</div>
@endforeach

@stop