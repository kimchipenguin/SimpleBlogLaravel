@extends('layout.mastertemplate')

@section('title', $postdata->articleTitle )

@section('content')
		  <div class="blog-post">
			<h2 class="blog-post-title">{{ $postdata->articleTitle }}</h2>
			<p class="blog-post-meta">{{ date('d.m.Y', strtotime($postdata->articleDate)) }} by <a href="#">{{ $postdata->name}}</a></p>
			<p>{!! $postdata->articleText !!}</p>
		  </div>
		  <form action="/comment" method="post">
		  <input type="hidden" name="postid" value="{{ $postdata->id }}">
			@if (Auth::check())
			<h3>Leave a Reply</h3>
			<textarea name="commenttext" id="commenttext" cols="60" rows="5" class="form-control"></textarea><br>
			<button type="submit" class="btn btn-default">Post Comment</button><br>
			Logged in as {{ $user->name }}. <a href="{{ route('logout') }}">Logout</a>
			@else
			<a class="blog-nav-item" href="{{ route('login') }}">Login to comment</a>
			@endif
		  </form>
@endsection
