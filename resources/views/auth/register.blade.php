<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Register | Kiwi</title>
</head>
<body class='bg-gray-400'>
<header class="py-10">
    <img src="/images/logo.png" alt="" class='mx-auto'>
</header>
<section>
    <div class='w-1/3 mx-auto bg-white rounded-lg'>
        <div class='text-center py-4'>
            <h1 class='text-xl text-blue-900 font-semibold'>Create Your account</b></h1>
        </div>
        <hr class='bg-blue-400'>
        <div class='bg-gray-300'>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="px-6 mb-6 pt-8">
                    <input id="username" placeholder="User Name" type="text" class="w-full border border-gray-500 h-10 px-4" name="username" value="{{old('username')}}" required>
                    @error('username')
                        <span class="text-red-400 ml-4">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="px-6 mb-6">
                    <input id="name" placeholder="Full Name" type="text" class="w-full border border-gray-500 h-10 px-4" name="name" value="{{old('name')}}" required>
                    @error('name')
                        <span class="text-red-400 ml-4">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="px-6 mb-6">
                    <input id="email" placeholder="email" type="email" class="w-full border border-gray-500 h-10 px-4" name="email" value="{{old('email')}}" required>
                    @error('email')
                        <span class="text-red-400 ml-4">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="px-6 mb-6">
                    <input id="password" placeholder="password" type="password" class="w-full border border-gray-500 h-10 px-4" name="password" value="{{old('password')}}" required>
                    @error('password')
                        <span class="text-red-400 ml-4">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="px-6 mb-6">
                    <input id="password_confirmation" placeholder="Confirm your password" type="password" class="w-full border border-gray-500 h-10 px-4" name="password_confirmation" value="{{old('password_confirmation')}}" required>
                </div>

                <div class="px-6 pb-6 content-center w-4/5 mx-auto">
                    <button type='submit'class='w-full border border-gray-500 rounded-md h-10 px- bg-blue-400 text-white font-medium'>Register</button>
                </div>
            </form>
        </div>
        <div class='px-10 py-6 text-center'>
        <a href="{{route('login')}}" class='text-sm text-blue-500 font-semibold'>Already have an account? sign In here</a>

        </div>
    </div>
</section>
</body>
</html>
