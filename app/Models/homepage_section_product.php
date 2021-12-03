<?php

namespace App\Models;

use Database\Factories\HomepageSectionProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class homepage_section_product extends Model
{
    use HasFactory,SoftDeletes;
    public function product()
    {
        return $this->belongsTo('App\Models\product','product_id','id')->where('status',1);
    }

}
