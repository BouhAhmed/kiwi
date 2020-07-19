<div class="border border-gray-300 rounded-lg my-3">
@forelse ($kiwis as $kiwi)
<div class='flex p-4 {{$loop->last ? '' : 'border-b border-gray-400'}}'>
        <div class='mr-2 flex-shrink-0'>
            <img src="{{$kiwi->user->getAvatar()}}" alt="" class='rounded-full h-10 mr-2'>
        </div>
        <div>
        <h5>
            <a class='font-bold' href="{{route('profile',$kiwi->user)}}">{{$kiwi->user->name}}</a>
        </h5>
            <p class='text-xs text-gray-600 mb-3'>
                {{ date('M d, Y - H:i', strtotime($kiwi->created_at))}}
            </p>
            <p class='text-sm'>
                {{$kiwi->body}}
            </p>
        </div>
    </div>
@empty
    <p class='text-sm p-6 text-center'>No tweets yet !</p>
@endforelse
</div>
