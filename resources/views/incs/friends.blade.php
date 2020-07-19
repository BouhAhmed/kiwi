<h3 class='font-bold text-xl mb-4'>Following</h3>
<ul>
    @forelse (auth()->user()->follows as $follow)
        <li class='py-3'>
            <div>
            <a class='flex items-center font-bold text-sm' href="{{route('profile',$follow)}}">
                <img src="{{$follow->getAvatar()}}" alt="" class='rounded-full h-10 mr-3'>{{$follow->name}}
            </a>
            </div>
        </li>
    @empty
        No Friends Yet !
    @endforelse

</ul>
