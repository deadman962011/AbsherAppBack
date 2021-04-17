<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AbsherSubEmp;

class EmployeeController extends Controller
{
    //

    public function SaveEmp(Request $request,$SubId)
    {

        //validate Inputs 
        $validate=$request->validate([
            'EmpNameI'=>'required',
            'EmpPhoneI'=>'required',
            'EmpUserI'=>'required',
            'EmpPassI'=>'required',
            'EmpTypeI'=>'required',
        ]);


        //Check Employee User Is Uniqe 
        $getEmp=AbsherSubEmp::where('EmpUser',$validate['EmpUserI'])->count();

        if($getEmp > 0 ){
            return redirect()->route('SubDashboardGet')->with('err',['err'=>'0','message'=>'Employee Username Already Exists']);
        }

        //

        //Save Employee
        $SaveEmp=new AbsherSubEmp([
            'EmpUser'=>$validate['EmpUserI'],
            'EmpPass'=>bcrypt($validate['EmpPassI']),
            'EmpType'=>$validate['EmpTypeI'],
            'EmpPer'=>1,
            'EmpSub'=>$SubId
        ]);

        $SaveEmp->Save();

        return redirect()->route('SubDashboardGet',['SubId'=>$SubId])->with('err',['err'=>'1','message'=>'Employee Successfully Saved']);

    }
}
