<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsherProduct extends Model
{
    use HasFactory;

    // 	 	 	 	

    protected $fillable=['ProductName','ProductPrice','ProductDesc','ProductCategory'];
}
