@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div>
    <h1 class="text-center text-uppercase pt-5 pb-5"><i class="heart fa-solid fa-heart"></i> ANGELINA <i class="heart fa-solid fa-heart"></i></h1>
</div>

    <div class="container angelina-pic mb-5 px-4">
        <img src="{{asset('img/ANGELINA1.jpeg')}}" alt="">
        <img src="{{asset('img/ANGELINA4.jpeg')}}" alt="">
        <img src="{{asset('img/ANGELINA2.jpeg')}}" alt="">
        <img src="{{asset('img/ANGELINA5.jpeg')}}" alt="">
        <img src="{{asset('img/ANGELINA3.jpeg')}}" alt="">
        <img src="{{asset('img/ANGELINA6.jpeg')}}" alt="">
    </div>
@endsection