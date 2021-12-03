<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory,SoftDeletes;
    public function vendor()
    {
        return $this->belongsTo(User::class,'vendor_id','id');
    }

    public function type()
    {
        return $this->belongsTo(product_type::class,'type_id','id');
    }

    public function dietary()
    {
        return $this->belongsTo(product_dietary::class,'dietary_id','id');
    }
}
