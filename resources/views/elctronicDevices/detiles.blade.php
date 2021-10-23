@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-4 text-center">
            {{-- image --}}
            <img src="{{asset('image/img1.png')}}" alt="no image">
            {{-- #image --}}
        </div>
        <div class="col-4 ">
            {{-- image --}}
            <img src="{{asset('image/img2.png')}}" alt="no image">
            {{-- #image --}}
        </div>
        <div class="col-4 ">
            {{-- image --}}
            <img src="{{asset('image/img3.png')}}" alt="no image">
            {{-- #image --}}
        </div>

    </div>
    <div class="row">
        <div class="col-4">
           <h1> Devic Name :{{ $devic->Dname }}</h1>
        </div>
        <div class="col-4">
           <h2> Number of Devic:{{$devic->Dnumber }}</h2>
        </div>
        <div class="col-4">
            <h1>Devic Price:{{ $devic->Dprice}}</h1>
        </div>
    </div>



</div>
@endsection