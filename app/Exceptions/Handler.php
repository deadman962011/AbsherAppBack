<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // //
    
 
        // if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
              
        //     return response()->json(['err',['err'=>'1','message' => 'TokenInvalidErr']],401);
        // }
        // else{
        
        //    // return response()->json(['err',['err'=>'1','message' =>'NotValidRouteErr']],500);
        // }
        // if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
    
        //     return response()->json(['err',['err'=>'1','message' => 'TokenExpiredErr']],401);
        // }
        //return $exception;
    }
}
