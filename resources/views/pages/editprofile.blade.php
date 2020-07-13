@extends('pages.home')

@section('page')
<h1 class='font-bold text-center text-xl pb-4 border-b mb-6'>Update Profile</h1>
<form action="{{route('update-profile',$user)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class='mb-6 flex items-center justify-around'>
        <label for="username" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Username</label>
        <input type="text" name='username' value='{{$user->username}}' class='p-2 border border-blue-400 w-2/3'>
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="name" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Full Name</label>
        <input type="text" name='name' value='{{$user->name}}' class='p-2 border border-blue-400 w-2/3'>
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="avatar" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Avatar</label>
        <input type="file" name='avatar' class='p-2 border border-blue-400 w-2/3'>
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="password" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Password</label>
        <input type="password" name='password' value='' class='p-2 border border-blue-400 w-2/3'>
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="password_confirmation" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Confirm Password</label>
        <input type="password" name='password_confirmation' value='' class='p-2 border border-blue-400 w-2/3'>
    </div>

    <div class='mb-6'>
        <button type="submit" class='px-6 py-2 bg-blue-200 border border-blue-400'>Save Changes</button>
    </div>


</form>
@endsection
