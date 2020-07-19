@extends('pages.home')

@section('page')
<h1 class='font-bold text-center text-xl pb-4 border-b mb-6'>Update Profile</h1>

@if (Session::has('success'))
   <div class="bg-green-200 f-width text-center border rounded-lg border-green-400 my-6 py-2">{{ Session::get('success') }}</div>
@endif

<form action="{{route('update-profile',$user)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class='mb-6 flex items-center justify-around'>
        <label for="username" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Username</label>
        <input type="text" name='username' value='{{$user->username}}' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600'>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="name" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Full Name</label>
        <input type="text" name='name' value='{{$user->name}}' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600'>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class='mb-6 flex items-center justify-around'>
        <label for="email" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Email</label>
        <input type="text" name='email' value='{{$user->email}}' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600'>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="desc" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>About You</label>
        <textarea name="desc" class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600'>{{$user->desc}}</textarea>
        @error('desc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="avatar" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Profile Picture</label>
        <input type="file" name='avatar' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600'>
        @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="password" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Password</label>
        <input type="password" name='password' value='' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600' required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class='mb-6 flex items-center justify-around'>
        <label for="password_confirmation" class='mr-2 w-1/3 bg-blue-200 p-2 text-center font-bold text-lg'>Confirm Password</label>
        <input type="password" name='password_confirmation' value='' class='p-2 border border-blue-400 w-2/3 outline-none focus:border-blue-600' required>

    </div>

    <div class='mb-6'>
        <button type="submit" class='px-6 py-2 bg-blue-200 border border-blue-400'>Save Changes</button>
    </div>


</form>
@endsection
