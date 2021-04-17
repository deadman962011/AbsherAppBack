<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AbsherCategory;

class CategoryController extends Controller
{
    //

    public function SaveCategory(Request $request)
    {
        //



        //validate Inputs 
        $validate=$request->validate([
            'CatNameI'=>'required',
            'CatDescI'=>'required'
        ]);


        //Upload Category Image 


        //save Category 
        $SaveCategory=new AbsherCategory([
            'CategoryName'=>$validate['CatNameI'],
            'CategoryDesc'=>$validate['CatDescI'],
            'CategoryImg'=>'test',
        ]);

        $SaveCategory->save();

        return redirect()->route('BigBlaxkDashboardGet')->with(['err'=>'0','msg'=>'Category Successfully Saved']);
        //Done

    }
}
