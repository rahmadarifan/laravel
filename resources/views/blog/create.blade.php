<h1>Create Blog Post</h1>

<form class="" action="/blog/public/blog" method="post">

	<input type="text" name="title" value="" placeholder="Judul">
	{{ ($errors->has('title')) ? $errors->first('title') : '' }}
	<br>
	<br>
	<textarea name="subject" rows="8" cols="40" placeholder="Isi..."></textarea>
	{{ ($errors->has('subject')) ? $errors->first('subject') : '' }}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<br>
	<br>
	<input type="submit" name="" value="Post">
</form>