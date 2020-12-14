<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Brand;
use App\Models\Processor;
use App\Models\Graphicscard;
use App\Models\Ram;

class BrandsController extends Controller
{
    //

    public function brand_laptop($brand_name){
       $pull_brands = Brand::where('brand_name',ucwords($brand_name))->where('active', '=', 'yes')->get();
        //dd($brand);
        $laptops = Laptop::where('brand_id', $pull_brands[0]->id)
                        ->orderBy('id')
                        ->with('brand')
                        ->where('active', '=', 'yes')
                        ->with('processor')
                        ->with('graphicscard')
                        ->with('ram')
                        ->with('comments')
                        ->with('images')                        
                        ->Paginate(15);
        //dd($laptops);

        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();


        $title = "laptops" . "|" . $brand_name;                 
        return view('laptops/index',compact('title','laptops','pull_brands', 'brands', 'processors', 'graphicscards', 'rams'));                 
    }
}
