<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AbsherProduct;

class ProductController extends Controller
{
    //

    public function SaveProduct(Request $request)
    {
        //validate Inputs 
        $validate=$request->validate([

            'ProdNameI'=>'required',
            'ProdCatI'=>'required',
            'ProdDesc'=>'required',
            'ProdPriceI'=>'required'
        ]);


        //Uplod Images


        //Save Product 
        $SaveProd=new AbsherProduct([
          'ProductName'=>$validate['ProdNameI'],
          'ProdDesc'=>$validate['ProdDescI'],
          'ProdPrice'=>$validate['ProdPriceI'],
          'ProdCategory'=>$validate['ProdCatI']
        ]);

        $SaveProd->save();

        return redirect()->route('BigBlaxkDashboardGet')->with(['err'=>'0','msg'=>'Product Successfully Saved']);
        //Done


    }
}
