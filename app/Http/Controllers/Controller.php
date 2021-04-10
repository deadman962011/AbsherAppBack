<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function MainGet()
    {

        return view('Main');
    }

    public function LoginGet()
    {
        
        return view('Login');
    }

    public function RegisterGet()
    {

        return view('Register');
    }




}
