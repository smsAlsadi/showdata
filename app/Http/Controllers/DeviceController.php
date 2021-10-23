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
    public function deleteData($id){
        $devices=Device::find($id);
        $devices->delete();
            return redirect("/home");
    }
    public function editDevice( Request $request ,$id){
        if($request->isMethod('POST')){
        $myProduct = Device::find($id);
        $myProduct->Dname =$request->D_name;
        $myProduct->Dnumber = $request->D_number;
        $myProduct->Dprice = $request->D_price;
        $myProduct->save();
        return redirect("/home");
        }else{
            $data['device']=Device::findOrfail($id);
            return view("elctronicDevices.editDev",$data);
        }
    

    }
    
    public function show($id){
        $data['devic']=Device::find($id);
        return view('elctronicDevices.detiles')->with($data);
    }
    
}
