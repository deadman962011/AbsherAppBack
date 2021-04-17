<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsherSub;

class SubController extends Controller
{
    //


    public function SaveSub(Request $request)
    {
        //Validate Inputs 
        $validate= $request->validate([
            'SubNameI'=>'required',
            'SubAddressI'=>'required',
            'SubPhoneI'=>'required',
        ]);


        //Save Sub
        $SaveSub=new AbsherSub([
            'SubName'=>$validate['SubNameI'],
            'SubAddress'=>$validate['SubAddressI'],
            'SubPhone'=>$validate['SubPhoneI']
        ]);

        $SaveSub->save();

        return redirect()->route('BigBlaxkDashboardGet')->with(['err'=>'0','msg'=>'Sub Successfully Saved']);

        //Done
    }


}
