@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Post Edit</h2>
    <form action="{{route('posts.update',$post_edit->id)}}" method="post" autocomplete="off">
        {{ method_field('PUT') }}
        @csrf

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="title">Title :</label>
					<input type="text" id="title" name="title" class="form-control" value="{{ $post_edit->title }}">
				</div>
				@error('title')
				<span class="text-danger">please fill the title</span>
				@enderror
			</div>
        </div>

        <div class="row">
            <div class="col-md-6">
				<div class="form-group">
					<label for="content">Content :</label>
					<input type="text" id="content" name="content" class="form-control" value="{{ $post_edit->content }}">
				</div>
				@error('content')
				<span class="text-danger">please fill the content</span>
				@enderror
			</div>
        </div>

		<div class="form-group">
			<button class="btn btn-success" type="submit">Save</button>
		</div>

	</form>
</div>
@endsection
