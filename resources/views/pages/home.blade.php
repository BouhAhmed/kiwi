@extends('layouts.app')

@section('content')

<hr class='mb-6'>
<div class="lg:flex lg:justify-between">
    <div class="lg:w-48">
        @include('incs.sidebar')
    </div>
    <div class="lg:flex-1 lg:mx-10" style="max-width:700px;">
        @yield('page')
    </div>
    <div class="lg:w-1/6 p-4 bg-blue-100 rounded-lg h-full">
        @include('incs.friends')
    </div>
</div>

@endsection
