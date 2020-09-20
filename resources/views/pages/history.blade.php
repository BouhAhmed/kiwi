@extends('pages.home')

@section('page')
<h1 class='font-bold text-center text-xl pb-4 border-b mb-6'>History Likes</h1>
@include('incs.timeline',['kiwis'=>$kiwis])
@endsection
