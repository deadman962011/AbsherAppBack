<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsherCategory extends Model
{
    use HasFactory;

    protected $fillable=['CategoryName','ProdNum','CategoryDesc','CategoryImg'];
}
