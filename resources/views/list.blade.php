@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center">User List</h1>
    <ul>
        @foreach ($users as $user)
        <li class="user_list">
            <span class="ml-5">{{$user->name}}</span>
            <span class="ml-5">{{$user->email}}</span>
        </li>
        @endforeach
    </ul>
</div>
@endsection