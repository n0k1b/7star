<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\product;

class category extends Model
{
    use HasFactory,SoftDeletes;
    public function product()
    {
        return $this->hasMany('App\Models\product','category_id','id')->where('status',1);
    }
}
