@extends('layouts.default')

@section('title', $post->title)

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title">{{{ $post->title }}} <small>by {{{ $post->user->email }}}</small></h1>
	</div>
	<div class="panel-body">
		<p>{{{ $post->message }}}</p>
	</div>
</div>

@stop