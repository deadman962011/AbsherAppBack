<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\AbsherSub;
use App\Models\AbsherSubEmp;

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
            'SubUserI'=>'required',
            'SubPassI'=>'required'
        ]);

        //Check Username Is Uniqe
        $getEmp=AbsherSubEmp::where('EmpUser',$validate['SubUserI'])->count();

        if($getEmp > 0 ){

            return redirect()->route('BigBlaxkDashboardGet')->with(['err'=>'1','msg'=>'Choose Deffirent User ']);
        }


        //Save Sub
        $SaveSub=new AbsherSub([
            'SubName'=>$validate['SubNameI'],
            'SubAddress'=>$validate['SubAddressI'],
            'SubPhone'=>$validate['SubPhoneI']
        ]);
        $SaveSub->save();

        //Save Sub Admin
        $SaveSubEmp=new AbsherSubEmp([
            'EmpUser'=>$validate['SubUserI'],
            'EmpPass'=>bcrypt($validate['SubPassI']),
            'EmpPer'=>0,
            'EmpType'=>0,
            'EmpSub'=>$SaveSub['id']
        ]);
        $SaveSubEmp->save();

        return redirect()->route('BigBlaxkDashboardGet')->with(['err'=>'0','msg'=>'Sub Successfully Saved']);

        //Done
    }

    public function SubLoginGet(Request $request)
    {
    
        //Protect Route
        if(!empty(Auth::guard('emp')->user())){
            return redirect()->route('SubDashboardGet');
        }

        return view('Sub.login');

        //Done
    }

    public function SubLoginPost(Request $request)
    {

        //Protect Route
        if(!empty(Auth::guard('emp')->user())){

            //get Sub Id
            $user=Auth::guard('emp')->user();
            return redirect()->route('SubDashboardGet',['SubId'=>$user['EmpSub']]);
        }

        //Validate Inputs
        $validate=$request->validate([
            'SubUserI'=>'required',
            'SubPassI'=>'required'
        ]);

    
        //Check Emp 
        if(Auth::guard('emp')->attempt(
            array(
            'EmpUser'=>$validate['SubUserI'],
            'password'=>$validate['SubPassI']
            ))){

                //get Sub Id
                $user=Auth::guard('emp')->user();

                return redirect()->route('SubDashboardGet',['SubId'=>$user['EmpSub']]);        
            }
            else{
                return redirect()->route('SubLoginGet')->with('err',['err'=>'0','message'=>'Username Or Password Is Wrong']);
            }
        
        //Done
    }


    public function SubDashboardGet($SubId)
    {
        //

        return view('Sub.dashboard',['SubId'=>$SubId]);

    }


}
