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
                           <h1> {{ $item->Dname}}</h1>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Number of Decices:{{ $item->Dnumber}}</li>
                        <li class="list-group-item">Price :{{ $item->Dprice}}</li>
                        <li class="list-group-item">Sold Quantity:</li>
                    </ul>
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
