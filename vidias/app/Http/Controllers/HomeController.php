<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mail;
use App\Helpers;
use App\Models\LogActivity;
use App\Models\User;
use App\Models\Laptop;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Address;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(\Auth::user()) {

            if(session()->has('checkout')) {
                session()->forget('checkout');
                return view('cart');                             
            }

            if(session()->has('payment')) {
                session()->forget('payment');
                return view('checkout');                             
            }

            if(session()->has('links')) {
                // dd(session('links'));
                return redirect(session('links')[0]);                            
            }

            $brands = Brand::where('active','=','yes')
                            ->whereIn('brand_name', 
                                        array('Alienware',
                                                'Micro-Star International(MSI)',
                                                'Republic of Gamers(ROG)',
                                                'Razer'))
                            ->get();

          
            return view('home',compact('brands'));
        }
        
    }

    public function contact(){
        // dd('here');
        return view('contact');
    }

    public function postContact(Request $request){
        $valid = $request->validate([
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|string',
            'comment' => 'bail|required|string',
        ]);
                
        $to_email = 'kulshresthanu9@gmail.com';
        $to_name = "ViDiA";

        Mail::send('emails/contact',$valid,function($message) use($valid,$to_email,$to_name){
            $message -> to($to_email,$to_name)->subject('Message from guest user.');
            $message->from($valid['email'],$valid['comment']);
        });

        session()->flash('success','your message has been sent!');
        return redirect()->back();
        
    }

}