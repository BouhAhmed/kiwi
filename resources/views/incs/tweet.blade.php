<div class='border border-blue-400 rounded-lg px-8 py-6'>
<form action="{{route('kiwi-store')}}" method='POST'>
        @csrf
        @error('body')
            <p class='text-sm text-red-500'>{{$message}}</p>
        @enderror
        <textarea name="body" id="tweet" class="w-full" placeholder="Qu'est ce que's up Biiiirds !"></textarea>
        <hr class='my-4'>
        <footer class='flex justify-between'>
        <img src="{{auth()->user()->getAvatar()}}" alt="" class='rounded-full h-10'>
            <button type="submit" class="bg-blue-400 text-white rounded-lg p-2 mr">kiwiiiiiii !!</button>
        </footer>
    </form>
</div>
