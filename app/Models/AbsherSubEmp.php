<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AbsherSubEmp extends Authenticatable
{


    //					
   protected $fillable=['EmpUser','EmpPass','EmpType','EmpPer','EmpSub'];

   protected $hidden=['EmpPass'];



    public function getAuthPassword()
    {
        return $this->EmpPass;
    }


}
