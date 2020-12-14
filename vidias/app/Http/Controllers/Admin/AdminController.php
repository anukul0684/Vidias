<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers;
use App\Models\LogActivity;
use App\Models\User;
use App\Models\Laptop;
use App\Models\Order;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $logs = LogActivity::latest()->limit(10)->get();
        // dd($logs);
        $users = User::count();
        $laptops = Laptop::count();
        $orders = Order::count();
        // $max_comments = DB::select('select count(distinct user_id) as num from comments order by num desc limit 1');
        // $user_comments = DB::table('comments')->select('user_id')->count('user_id')->desc()->limit(1);
        $max_comments = DB::table('laptops')
                            ->join('comments', 'comments.laptop_id', '=', 'laptops.id')                            
                            ->select(DB::raw('count(laptops.id) as laptop_count, laptops.id as id, laptops.laptop_name as laptop_name'))
                            ->groupBy('laptops.id','laptops.laptop_name')
                            ->orderByDesc(DB::raw('count(laptops.id)'))
                            ->limit(1)
                            ->first();
        if($max_comments){
            $max_comments = $max_comments->laptop_name;
        } else {
            $max_comments = 'No Comments Yet!';
        }

        $user_max_comment = DB::table('users')
                                ->join('comments', 'comments.user_id', '=', 'users.id')
                                ->select(DB::raw('count(users.id) as user_count, users.id as id, users.name as name'))
                                ->groupBy('users.id', 'users.name')
                                ->orderByDesc(DB::raw('count(users.id)'))
                                ->limit(1)
                                ->first();
        
        if($user_max_comment){
            $user_max_comment = $user_max_comment->name;
        } else {
            $user_max_comment = 'No Comments Yet!';
        }


        $best_seller = DB::table('laptops')
                            ->join('order_details', 'order_details.laptop_id', '=', 'laptops.id')
                            ->select(DB::raw('count(laptops.id) as laptop_count, laptops.id as id, laptops.laptop_name as laptop_name'))
                            ->groupBy('laptops.id', 'laptops.laptop_name')
                            ->orderBy(DB::raw('count(laptops.id)'), 'desc')
                            ->limit(1)
                            ->first();

        // dd($best_seller);
        if($best_seller){
            $best_seller = $best_seller->laptop_name;
        } else {
            $best_seller = 'No Comments Yet!';
        }

        return view('admin/dashboard', compact('logs', 'users', 'laptops', 'orders', 'max_comments', 'user_max_comment', 'best_seller'));
    }
}
