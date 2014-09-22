@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>{{{ $post->title }}}</h1>
<small>by {{{ $post->user->email }}}</small>
<p>{{ nl2br($post->message) }}</p>
@foreach($post->tags as $tag)
<a href="{{ route('tag', $tag->id) }}" class="badge alert-danger">{{ $tag->name }}</a>
@endforeach
<h2 id="comments">Comments</h2>
@if($post->comments->count() > 0)
	@foreach($post->comments as $comment)
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{{ $comment->user->email }}} <small>on {{ $comment->created_at->format('Y-m-d H:i') }}</small></h3>
		</div>
		<div class="panel-body">
			{{ nl2br($comment->message) }}
		</div>
	</div>
	@endforeach
@else
	<div class="no-comments">Be the first to comment!</div>
@endif
{{ Form::open(['role' => 'form']) }}
<div class="form-group">
	{{ Form::textarea('message', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
@stop