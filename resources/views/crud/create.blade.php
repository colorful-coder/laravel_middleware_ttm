@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Add Post</h2>
	<form action="{{route('posts.index')}}" method="post" autocomplete="off">
        @csrf
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="title">Title :</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Enter the title" value="{{ old('title') }}">
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
					<input type="text" id="content" name="content" class="form-control" placeholder="Enter the content" value="{{ old('content') }}">
				</div>
				@error('content')
				<span class="text-danger">please fill the content</span>
				@enderror
			</div>
        </div>

		<div class="form-group mt-3">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>

	</form>
</div>
@endsection
