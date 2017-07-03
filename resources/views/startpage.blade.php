@extends('layout.mastertemplate')

@section('title', 'Home')

@section('content')
@foreach ($bloglist as $blogentry)
<? $link=date('Y/m/', strtotime($blogentry->articleDate)).$blogentry->articleTitleSeo; ?>
		  <div class="blog-post">
			<h2 class="blog-post-title"><a href="{{ $link }}">{{ $blogentry->articleTitle }}</a></h2>
			<p class="blog-post-meta">{{ date('d.m.Y', strtotime($blogentry->articleDate)) }} by <a href="#">{{ $blogentry->name}}</a></p>
			<p>{!! $blogentry->articleText !!}</p>
		  </div>
@endforeach
@endsection
