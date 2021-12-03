<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class homepage_section extends Model
{
    use HasFactory,SoftDeletes;
    public function product_list()
    {
        return $this->hasMany('App\Models\homepage_section_product','homepage_section_id','id')->where('status',1);
    }
}
