@extends('layouts.app')

@section('content')
{{--  <div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif  --}}

            {{--  {{ __('You are logged in!') }}  --}}
            <div class="row justify-content-center ">
                {{--  start  --}}
                @foreach ($devies as $item )
                <div class="col-md-3 mr-5 ">
            {{--  card  --}}
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-header">
                    <h3 class="text-center "style="color: white"> {{ $item->Dname}}</h3>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Number of Decices:{{ $item->Dnumber}}</li>
                <li class="list-group-item">Price :{{ $item->Dprice}}</li>
                <li class="list-group-item">Sold Quantity:</li>
            </ul>
            <div  type =" button"class="bg-primary">
                {{-- icons --}}
                <div class="row pt-4">
                    {{-- 1 --}}
                    <div class="col-4 text-center" style="color:white">
                <a style="color:white" href="edit/{{  $item->id}}"> <i class="fas fa-edit " ></i>
                    <p>Edit</p></a>
                    </div>
                    {{-- 2--}}
                    <div class="col-4 text-center"style="color:white">
                <a style="color:white" href="/deatil/{{  $item->id}}"> <i class="fas fa-info-circle text-center" ></i>
                <p>Detiles</p></a>
                </div>
                    {{-- 3--}}
                    <div class="col-4 text-center"style="color:white">
                <a href="/AddDevice/{{ $item->id }}" style="color:white"><i class="fas fa-trash-alt"></i><p>Delete</p></a>
                </div>
                </div>
                {{-- #icons --}}
                        </div>
                            {{-- #enddrow --}}
            </div>
        </div>
            {{--  #card  --}}
            
            @endforeach
            </div>
            {!! $devies ->links() !!}
    </div>
{{--  </div>
</div>
</div>  --}}  
@endsection
