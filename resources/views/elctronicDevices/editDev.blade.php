

@extends('layouts.app')

@section('content')
<div class="container  ">
 
    <div class="row justify-content-center m-3">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header text-right "><a href="/home"><button type="button" class="btn btn-primary"> <i class="fas fa-arrow-right"></i></button></a></div>
                
                <div type="button" class="btn btn-primary">
                Updata Data
                </div>
<div class="card-body m-3 p-3">
    <form method="POST" action="/edit/{{ $device->id }}">
        @csrf

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Device Name</label>
            <div class="col-sm-8">
            <input id="name" type="text" value="{{ $device->Dname }}"class=" m-3 form-control"  name="D_name">
            </div>
            
            <label  class="col-md-4 col-form-label text-md-right">Device Number</label>
            <div class="col-sm-8">
            <input id="name" type="text" value="{{ $device->Dnumber }}" class=" m-3 form-control" name="D_number" >
            </div>
            <label  class="col-md-4 col-form-label text-md-right">Device Price</label>
            <div class="col-sm-8 ">
            <input id="name" type="text" class=" m-3 " value="{{ $device->Dprice }}" name="D_price" >
            </div>
        </div>
    
        


        
    

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update Data
                </button>
            </form>
            
            </div>
        </div>
    
</div></div></div></div></div>@endsection