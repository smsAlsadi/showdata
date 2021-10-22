

@extends('layouts.app')

@section('content')
<div class="container  ">
 
    <div class="row justify-content-center m-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Add Device</div>
                

<div class="card-body m-3 p-3">
    <form method="POST" action="{{ route('add') }}">
        @csrf

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Device Name</label>
            <div class="col-sm-8">
            <input id="name" type="text" class=" m-3 form-control @error('name') is-invalid @enderror" name="D_name"  required autocomplete="name" autofocus>
            </div>
            
            <label  class="col-md-4 col-form-label text-md-right">Device Number</label>
            <div class="col-sm-8">
            <input id="name" type="text" class=" m-3 form-control @error('name') is-invalid @enderror" name="D_number"  required autocomplete="name" autofocus>
            </div>
            <label  class="col-md-4 col-form-label text-md-right">Device Price</label>
            <div class="col-sm-8 ">
            <input id="name" type="text" class=" m-3 form-control @error('name') is-invalid @enderror" name="D_price"  required autocomplete="name" autofocus>
            </div>
        </div>
    
        
   

        
    

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Save Data
                </button>
            </form>
            
            </div>
        </div>
    
</div></div></div></div></div>@endsection