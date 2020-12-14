<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Brand;
use App\Models\Processor;
use App\Models\Graphicscard;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Order_detail;
use App\Models\Ram;

class LaptopsController extends Controller
{
    //


    public function index()
    {
        //$laptops = Laptop::orderBy('id')->Paginate(3);
        $laptops = Laptop::where('active', '=', 'yes')->orderBy('id')
                            ->with('brand')
                            ->with('processor')
                            ->with('graphicscard')
                            ->with('images')
                            ->with('comments')
                            ->with('ram')
                            ->Paginate(15);
        //dd($laptops);
        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();

        $title = 'Laptops';
        return view('laptops/index',compact('title','laptops', 'brands', 'processors', 'graphicscards', 'rams'));
        //This is new update
    }

    /**
     * [brand_category function to display list view as per selected brand]
     * @param  [string] $name [slug]
     * @return [type]       [description]
     */
    public function brand_category($name)
    {
        $brand_cat = Brand::where('slug', $name)->first();
        $laptops = Laptop::where('brand_id', $brand_cat->id)->orderBy('id')
                            ->with('brand')
                            ->with('processor')
                            ->with('graphicscard')
                            ->with('images')
                            ->with('comments')
                            ->with('ram')
                            ->Paginate(15);

        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();

        $title = 'Category';
        return view('laptops/category',compact('title', 'laptops', 'brands', 'processors', 'graphicscards', 'rams'));
    }

    /**
     * [processor_category function to display list view as per selected processor]
     * @param  [string] $name [slug]
     * @return [type]       [description]
     */
    public function processor_category($name)
    {
        $processor_cat = Processor::where('slug', $name)->first();
        $laptops = Laptop::where('processor_id', $processor_cat->id)->orderBy('id')
                            ->with('brand')
                            ->with('processor')
                            ->with('graphicscard')
                            ->with('images')
                            ->with('comments')
                            ->with('ram')
                            ->Paginate(15);

        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();

        $title = 'Category';
        return view('laptops/category',compact('title', 'laptops', 'brands', 'processors', 'graphicscards', 'rams'));
    }

    /**
     * [graphics_card_category function to display list view as per selected Graphics Card]
     * @param  [string] $name [slug]
     * @return [type]       [description]
     */
    public function graphics_card_category($name)
    {
        $graphics_card_cat = Graphicscard::where('slug', $name)->first();
        $laptops = Laptop::where('graphicscard_id', $graphics_card_cat->id)->orderBy('id')
                            ->with('brand')
                            ->with('processor')
                            ->with('graphicscard')
                            ->with('images')
                            ->with('comments')
                            ->with('ram')
                            ->Paginate(15);

        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();

        $title = 'Category';
        return view('laptops/category',compact('title', 'laptops', 'brands', 'processors', 'graphicscards', 'rams'));
    }

    /**
     * [ram_category function to display list view as per selected Ram]
     * @param  [string] $name [slug]
     * @return [type]       [description]
     */
    public function ram_category($name)
    {
        $ram_cat = Ram::where('slug', $name)->first();
        $laptops = Laptop::where('ram_id', $ram_cat->id)->orderBy('id')
                            ->with('brand')
                            ->with('processor')
                            ->with('graphicscard')
                            ->with('images')
                            ->with('comments')
                            ->with('ram')
                            ->Paginate(15);

        $brands = Brand::where('active', '=', 'yes')->orderBy('id')->get();

        $processors = Processor::where('active', '=', 'yes')->orderBy('id')->get();

        $graphicscards = Graphicscard::where('active', '=', 'yes')->orderby('id')->get();

        $rams = Ram::where('active', '=', 'yes')->orderBy('id')->get();

        $title = 'Category';
        return view('laptops/category',compact('title', 'laptops', 'brands', 'processors', 'graphicscards', 'rams'));
    }

    public function show(Request $request,$brand,Laptop $laptop)
    {
        $processor = Processor::where('id','=',$laptop->processor_id)->first();

        $graphicscard = Graphicscard::where('id','=',$laptop->graphicscard_id)->first();

        $ram = Ram::where('id','=',$laptop->ram_id)->first();

        $images = Image::where('laptop_id','=',$laptop->id)->get();

        $feat = Image::where('laptop_id','=',$laptop->id)->first();

        $comments = Comment::where('laptop_id','=',$laptop->id)->get();

        $order_details = Order_detail::where('laptop_id','=',$laptop->id)->get();

        
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path();
        array_unshift($links, $currentLink); 
        session(['links' => $links]);

        
        //dd($processor);

        $processors = processor::orderby('id')->get();
        $graphicscards = Graphicscard::orderby('id')->get();
        $rams = Ram::orderby('id')->get();

        $title = "Laptops" . " | " . $laptop->laptop_name;
        return view('laptops/show',compact('title',
                                            'laptop',
                                            'brand',
                                            'processor',
                                            'graphicscard',
                                            'images',
                                            'comments',
                                            'order_details', 
                                            'feat',
                                            'ram',
                                            'processors',
                                            'graphicscards',
                                            'rams'));
    }

    public function addToCart(Request $request)
    {
        $laptopid = $request->id;
        $laptop = Laptop::find($laptopid)
                        ->with('brand')
                        ->with('processor')
                        ->with('graphicscard')
                        ->with('images')
                        ->with('comments')
                        ->with('ram')
                        ->where('id', '=', $laptopid)
                        ->first();
        
        if((int)$request->ram_id != 0) {
            $ram = Ram::find((int)$request->ram_id)
                    ->where('id', '=', $request->ram_id)->first();          

            if((double)$laptop->ram->ram_price < (double)$ram->ram_price) {

                $new_ram_price = (double)$ram->ram_price - (double)$laptop->ram->ram_price;

                $laptop->price += $new_ram_price;

            } elseif((double)$laptop->ram->ram_price > (double)$ram->ram_price) {

                $new_ram_price = (double)$laptop->ram->ram_price - (double)$ram->ram_price;

                $laptop->price -=$new_ram_price;

            }
            $laptop->ram_id =  $ram->id;            
            $laptop->ram->ram_size = $ram->ram_size;
            $laptop->ram->ram_price =  $ram->ram_price;    
                        
        }

        if((int)$request->graphicscard_id != 0) {

            $graphicscard = Graphicscard::find((int)$request->graphicscard_id)
                                    ->where('id', '=', $request->graphicscard_id)->first();            

            if((double)$laptop->graphicscard->graphicscard_price 
                        < (double)$graphicscard->graphicscard_price) {

                $new_graphicscard_price = (double)$graphicscard->graphicscard_price 
                                            - (double)$laptop->graphicscard->graphicscard_price;

                $laptop->price += $new_graphicscard_price;

            } elseif((double)$laptop->graphicscard->graphicscard_price 
                        > (double)$graphicscard->graphicscard_price) {

                $new_graphicscard_price = (double)$laptop->graphicscard->graphicscard_price 
                                            - (double)$graphicscard->graphicscard_price;

                $laptop->price -=$new_graphicscard_price;
            }
            
            $laptop->graphicscard_id =  $graphicscard->id; 
            $laptop->graphicscard->graphicscard_name = $graphicscard->graphicscard_name;
            $laptop->graphicscard->graphicscard_price = $graphicscard->graphicscard_price;           
            
        }

        if((int)$request->processor_id != 0) {
            $processor = Processor::find((int)$request->processor_id)
                                    ->where('id', '=', $request->processor_id)->first();
            
            

            if((double)$laptop->processor->processor_price < (double)$processor->processor_price) {

                $new_processor_price = (double)$processor->processor_price 
                                            - (double)$laptop->processor->processor_price;

                $laptop->price += $new_processor_price;

            } elseif((double)$laptop->processor->processor_price > (double)$processor->processor_price) {

                $new_processor_price = (double)$laptop->processor->processor_price 
                                            - (double)$processor->processor_price;

                $laptop->price -=$new_processor_price;

            }

            $laptop->processor_id =  $processor->id; 
            $laptop->processor->processor_name = $processor->processor_name;
            $laptop->processor->processor_price = $processor->processor_price;          
        }
               
        $image_name = '';
        foreach($laptop->images as $image)
        {
            $image_name = $image->image_name;
            continue;
        }
        
        if(!$laptop) {
            abort(404);
        }
        
        $cart = session()->get('cart');
        $cart_id = 0;
        // if cart is empty then this is the first laptop to add
        if(!$cart) {
            $cart_id = 1;
        } else {
            //dd(count($cart));
            $cart_id = count($cart) + 1;
        }
        //dd($cart_id );
        $cart[$cart_id] = [
                    "id" => $laptop->id,
                    "name" => $laptop->laptop_name,
                    "quantity" => 1,
                    "price" => $laptop->price,
                    "photo" => $image_name,
                    "brand_id" => $laptop->brand_id,
                    "brand" => $laptop->brand->brand_name,
                    "processor_id" => $laptop->processor_id,
                    "processor_name" => $laptop->processor->processor_name,
                    "processor_price" => $laptop->processor->processor_price,
                    "graphicscard_id" => $laptop->graphicscard_id,
                    "graphicscard_name" => $laptop->graphicscard->graphicscard_name,
                    "graphicscard_price" => $laptop->graphicscard->graphicscard_price,
                    "ram_id" => $laptop->ram_id,
                    "ram_size" => $laptop->ram->ram_size,   
                    "ram_price" => $laptop->ram->ram_price,                     
                    "touch_screen" => $laptop->touch_screen,
                    "screen_resolution" => $laptop->screen_resolution,
                    "screen_size" => $laptop->screen_size,
                    "usb_type" => $laptop->usb_type,                        
        ];
        
        session()->put('cart', $cart);
        session()->flash('success','Laptop added to cart successfully');
        return redirect()->back();
        

        // // if cart is not empty then we check if this laptop exists, if yes then we increment the quantity
        // if(isset($cart[$laptopid])) {            
        //     $cart[$laptopid]['quantity']++;
        //     session()->put('cart', $cart);
        //     session()->flash('success','Laptop added to cart successfully');
        //     return redirect()->back();
        // }

        // // if item does not exist in the cart then we add it to the cart with quantity = 1
        // $cart[$laptopid] = [
        //     "id" => $laptop->id,
        //     "name" => $laptop->laptop_name,
        //     "quantity" => 1,
        //     "price" => $laptop->price,
        //     "photo" => $image_name,
        //     "brand_id" => $laptop->brand_id,
        //     "brand" => $laptop->brand->brand_name,
        //     "processor_id" => $laptop->processor_id,
        //     "processor_name" => $laptop->processor->processor_name,
        //     "processor_price" => $laptop->processor->processor_price,
        //     "graphicscard_id" => $laptop->graphicscard_id,
        //     "graphicscard_name" => $laptop->graphicscard->graphicscard_name,
        //     "graphicscard_price" => $laptop->graphicscard->graphicscard_price,
        //     "ram_id" => $laptop->ram_id,
        //     "ram_size" => $laptop->ram->ram_size,   
        //     "ram_price" => $laptop->ram->ram_price,                     
        //     "touch_screen" => $laptop->touch_screen,
        //     "screen_resolution" => $laptop->screen_resolution,
        //     "screen_size" => $laptop->screen_size,
        //     "usb_type" => $laptop->usb_type,        
        // ];
        // session()->put('cart', $cart);
        // session()->flash('success','Laptop added to cart successfully');
        // return redirect()->back();
    }
    
    public function update(Request $request)
    {
        //dd((int)$request->quantity);
        //(int)$request->quantity;

        $valid = $request->validate([
            'get_qty' => 'bail|required|integer'            
        ]);

        $new_qty = (int)$valid['get_qty'];
        
        if($new_qty >= 0 && $new_qty < 1) {                

            $cart = session()->get('cart');

            unset($cart[$request->cart_id]);

            if(!$cart) {
                session()->forget('cart');

                session()->flash('error', 'Cart is now empty.');

                return redirect()->back();
            }

            session()->put('cart', $cart);


            session()->flash('success', 'Laptop removed successfully.');

            return redirect()->back();

        } elseif($new_qty < 0) {

            session()->flash('error', 'Invalid Entry.');

            return redirect()->back();
            
        }
        
        
            
        //dd($new_qty);
        $cart = session()->get('cart');

        $cart[$request->cart_id]["quantity"] = $new_qty;

        session()->put('cart', $cart);
        
        session()->flash('success', 'Cart updated successfully');

        return redirect()->back();
        
    }

    public function remove(Request $request)
    {
        //dd($request->cartid);
        if($request->cartid) {

            $cart = session()->get('cart');

            if(isset($cart[$request->cartid])) {

                unset($cart[$request->cartid]);

                if(!$cart) {
                    session()->forget('cart');
    
                    session()->flash('error', 'Cart is now empty.');
    
                    return redirect()->back();
                }
                
                session()->put('cart', $cart);

                session()->flash('success', 'Laptop removed successfully');
                return redirect()->back();
            }

            session()->flash('error', 'Some issue occurred. Please try again');
            return redirect()->back();
        }
    }

    public function store(Request $request,$brand,Laptop $laptop)
    {
            $valid = $request->validate([
            'user_id' => 'bail|required|integer',
            'laptop_id' => 'bail|required|integer',
            'comment_text' => 'bail|required|string',
            'active' => 'required'
        ]);

        $new_comment = Comment::create($valid);

        if($new_comment){
            session()->flash('success', 'Comment was successfully created');
        } else {
            session()->flash('error', 'There was a problem creating the comment');
        }

        // dd($new_comment);
        return redirect()->back();
    }

}