<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function Device(){
        return view('elctronicDevices.createDev');
    }
    public function AddData(Request $request){
        $request->validate([
            'D_name' => 'required',
            'D_number' => 'required',
            'D_price' => 'required',
            
        ]);
        $DName = $request->D_name;
        $DNumber = $request->D_number;
        $DPrice = $request->D_price;
        $myProduct = new Device();
        $myProduct->Dname =  $DName;
        $myProduct->Dnumber = $DNumber;
        $myProduct->Dprice = $DPrice;
        $myProduct->save();
    
    return back();
    }
   
    
    
}
