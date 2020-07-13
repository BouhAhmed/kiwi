@extends('pages.home')

@section('page')

<header class='mb-4 relative'>
    <img src="/images/cover.jpg" alt="" class='rounded-lg object-cover h-64 w-full mb-4'>
    <div class='flex justify-between items-center mb-6'>
        <div>
            <h2 class='text-xl font-bold'>{{$user->name}}</h2>
            <p class='text-xs'>
                <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class='flex'>

            @can('edit', $user)
                <a href="{{route('edit-profile',$user)}}" class="border border-gray-400 text-sm rounded-full px-6 py-2 mr-2 font-bold">Edit profile</a>
            @endcan

            @can('follow',$user)
                <form action="{{route('toggle-follow',$user)}}" method='POST'>
                    @csrf
                    <button type='submit' class="bg-blue-600 hover:bg-blue-500 text-white text-sm rounded-full px-6 py-2 font-bold">
                        {{auth()->user()->following($user) ? 'Unfollow' : 'Follow'}}
                    </button>
                </form>
            @endcan

        </div>
    </div>
    <div class='text-center text-sm px-6'>
        I am so in love with her <a href="#" class='text-blue-600 font-bold'>@KawtarBenLarbi</a>
    </div>
    <img src="/images/avatar.png" alt="" class='rounded-full absolute'
    style='width:120px; left:calc(50% - 75px); top:45%;'>
</header>
@include('incs.timeline',['kiwis'=>$user->kiwis])
@endsection
