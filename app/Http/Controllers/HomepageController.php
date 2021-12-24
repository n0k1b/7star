<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\homepage_section;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $banner = ['/image/banner/1.png','/image/banner/2.png'];
        $category = category::where('status',1)->with(['product','product.type:id,name','product.dietary:id,name','product.vendor:id,name'])->get(['id','name','image','created_at','popular_status']);
        $homepage_section = homepage_section::where('status',1)->with(['product_list','product_list.product'])->get();
        return response()->json(['banner'=>$banner,'category'=>$category,'section'=>$homepage_section],200);
    }
}
