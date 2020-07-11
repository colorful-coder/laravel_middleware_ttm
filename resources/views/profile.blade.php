@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center">Profile</h1>
    <div class="ml-5 cl-6">
        <label for="lname">Name</label>
        <input type="text" id="lname" name="lname" value={{$users->name}} disabled><br><br>
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lname" value={{$users->email}} disabled><br><br>
        <label for="lname">Password</label>
        <input type="text" id="lname" name="lname" value={{$users->password}} disabled><br><br>
    </div>
</div>
@endsection