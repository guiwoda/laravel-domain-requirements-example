@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-9">
		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a href="{{ route('post', $post->id) }}">{{{ $post->title }}}</a> <small>by {{{ $post->user->email }}}</small>
					@if($commentCount = $post->comments->count())
					<a class="badge" href="{{ route('post', $post->id) }}#comments"><i class="fa fa-comment"></i> {{ $post->comments->count() }}</a>
					@endif
				</h3>
			</div>
			<div class="panel-body">
				<p>{{ nl2br(Str::words($post->message, 100)) }}</p>
			</div>
			<div class="panel-footer">
				@foreach($post->tags as $tag)
				<a href="{{ route('tag', $tag->id) }}" class="badge alert-danger">{{ $tag->name }}</a>
				@endforeach
			</div>
		</div>
		@endforeach
		<a href="{{ route('posts.search') }}">View all posts...</a>
	</div>
	<div class="col-md-3">

	</div>
</div>
@stop