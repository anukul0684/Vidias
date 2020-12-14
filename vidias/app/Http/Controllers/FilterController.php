<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Brand;
use App\Models\Processor;
use App\Models\Graphicscard;
use App\Models\Ram;

class FilterController extends Controller
{
    
    public function ram_filter(){
        $laptops = Laptop::where("active","yes")
                   ->orderby('ram_id','DESC')
                   ->with('brand')
                   ->with('processor')
                   ->with('graphicscard')
                   ->with('ram')
                   ->with('comments')
                   ->with('images')
                   ->paginate(15);
        
        $brands = Brand::where('active','yes')->orderby('id')->get();
        $processors = Processor::where('active','yes')->orderby('id')->get();
        $graphicscards = Graphicscard::where('active','yes')->orderby('id')->get();
        $rams = Ram::where('active','yes')->orderby('id')->get();

        $title = "Laptops With various Rams";

        return view('laptops/index',compact('title','laptops','brands','processors','graphicscards','rams'));
    }

    public function screen_filter(){
        $laptops = Laptop::where('active','yes')
                         ->orderby('screen_size','DESC')
                         ->with('brand')
                         ->with('graphicscard')
                         ->with('ram')
                         ->with('comments')
                         ->with('images')
                         ->paginate(15);

        $brands = Brand::where('active','yes')->orderby('id')->get();
        $processors = Processor::where('active','yes')->orderby('id')->get();
        $graphicscards = Graphicscard::where('active','yes')->orderby('id')->get();
        $rams = ram::where('active','yes')->orderby('id')->get();

        $title = "Laptops with Screen sizes";
        return view('laptops/index',compact('title','laptops','brands','processors','graphicscards','rams'));                 
    }

    public function processor_filter(){
        $laptops = Laptop::where('active','yes')
                         ->orderby('processor_id', 'DESC')
                         ->with('brand')
                         ->with('graphicscard')
                         ->with('ram')
                         ->with('comments')
                         ->with('images')
                         ->paginate(15);

        $brands = Brand::where('active','yes')->orderby('id')->get();
        $processors = Processor::where('active','yes')->orderby('id')->get();     
        $graphicscards = Graphicscard::where('active','yes')->orderby('id')->get();
        $rams = Ram::where('active','yes')->orderby('id')->get();

        $title = "Laptop with Processor";

        return view('laptops/index',compact('title','laptops','brands','processors','graphicscards','rams'));            
    }

    public function graphics_filter(){
        $laptops = Laptop::where('active','yes')
                         ->orderby('graphicscard_id')
                         ->with('brand')
                         ->with('graphicscard')
                         ->with('ram')
                         ->with('comments')
                         ->with('images')
                         ->paginate(15);

        $brands = Brand::where('active','yes')->orderby('id')->get();
        $processors = Processor::where('active','yes')->orderby('id')->get();
        $graphicscards = Graphicscard::where('active','yes')->orderby('id')->get();
        $rams = Ram::where('active','yes')->orderby('id')->get();

        $title = "Laptop With Graphicscard" ;

        return view('/laptops/index',compact('title','laptops','brands','processors','graphicscards','rams'));                 
    }

    public function price_filter(){
        $laptops = Laptop::where('active','yes')
                         ->orderby('price')
                         ->with('brand')
                         ->with('graphicscard')
                         ->with('ram')
                         ->with('comments')
                         ->with('images')
                         ->paginate(15);
        $brands = Brand::where('active','yes')->orderby('id')->get();
        $processors = Processor::where('active','yes')->orderby('id')->get();
        $graphicscards = Graphicscard::where('active','yes')->orderby('id')->get();
        $rams = Ram::where('active','yes')->orderby('id')->get();
        $title = "Laptop With Price";
        return view('/laptops/index',compact('title','laptops','brands','processors','graphicscards','rams'));
    }

}
