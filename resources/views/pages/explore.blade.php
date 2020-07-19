@extends('pages.home')

@section('page')
<h1 class=' text-xl mb-6 font-bold'><a href="{{route('home')}}"><i class="fa fa-arrow-left mr-2 text-xl text-blue-800" aria-hidden="true"></i></a>Explore</h1>
@foreach ($users->chunk(3) as $set_users)
<div class='flex justify-between'>
    @foreach ($set_users as $user)
    <div class='border w-1/3 pb-4'>
        <img class='rounded-full mx-auto mt-4 h-24' src="{{$user->getAvatar()}}" alt="">
        <h1 class='text-center pt-4 text-xl font-light'>
            <a href="{{route('profile',$user)}}">{{$user->name}}</a>
        </h1>
        <h1 class='text-center font-medium text-sm'>
            <a href="{{route('profile',$user)}}">{{$user->username}}</a>
        </h1>
        <form class='w-1/2 mx-auto mt-4' action="{{route('toggle-follow',$user)}}" method='POST'>
            @csrf
            <button type='submit' class="bg-blue-600 hover:bg-blue-500 text-white text-sm rounded-full px-6 py-2 font-bold w-full">
                {{auth()->user()->following($user) ? 'Unfollow' : 'Follow'}}
            </button>
        </form>
    </div>
    @endforeach
</div>
@endforeach
@endsection
