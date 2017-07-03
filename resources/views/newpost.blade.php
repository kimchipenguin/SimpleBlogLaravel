@extends('layout.mastertemplate')

@section('title', "New Post" )

@section('content')
		  <div class="blog-post">
			<h2 class="blog-post-title">New Post</h2>
		  </div>
		  <form action="/new/create" method="post">
		  <input type="text" name="commenttitle" class="form-control"><br>
		  	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<textarea name="commenttext" id="commenttext" cols="60" rows="5" class="form-control"></textarea><br>
			<button type="submit" class="btn btn-default">Save</button><br>
		  </form>
<script>
	tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>
@endsection
