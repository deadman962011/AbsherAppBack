<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AbsherCategory;

class BigBlaxkController extends Controller
{
    //




    //BigBlaxk Login Get
    public function BigBlaxkLoginGet(Request $request)
    {
        
        //render BigBlaxk Login View 
        return view('BigBlaxk.login');


    }


    //BigBlaxk Login Post 
    public function BigBlaxkLoginPost(Request $request)
    {
        //Validate Inputs 
        $validate = $request->validate([

            'BlaxkUserI'=>'required',
            'BlaxkPassI'=>'required'
        ]);

        //Attempt Login
        $user = $validate['BlaxkUserI'];
        $pass = $validate['BlaxkPassI'];
        if( $user === config('app.BigBlaxkUser') && $pass === config('app.BigBlaxkPass') ){

            //redirect To BigBlaxk Dashboard
             return  redirect()->route('BigBlaxkDashboardGet');
        

        }
        else{

        //redirect To BigBlaxk Login Page     
        return  redirect()->route('BigBlaxkLoginGet');

        }

        //Done
    }

    public function BigBlaxkDashboardGet(Request $request)
    {

        //get Categories 

        $getCats=AbsherCategory::all();
        
        //render BigBlaxk Dashboard View
        return view('BigBlaxk.dashbaord',['Categories'=>$getCats]);
    }



}
