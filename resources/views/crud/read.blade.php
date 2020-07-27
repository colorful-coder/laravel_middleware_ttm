@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{  $post->id   }}</th>
                <td>{{  $post->title   }}</td>
                <td>{{  $post->content   }}</td>
                <td>{{  $post->created_at   }}</td>
                <td>{{  $post->updated_at   }}</td>
                <td>

                    <a href="{{route('posts.edit',$post->id,'edit')}}" class="btn btn-primary">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                        {{ method_field('DELETE') }} 
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection