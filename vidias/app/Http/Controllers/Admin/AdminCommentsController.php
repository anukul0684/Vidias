<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Laptop;
use Illuminate\Support\Str;

class AdminCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('active','=','yes')->get();
        return view('admin/comments/index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $laptops = Laptop::all();
        return view('admin/comments/create', compact('users', 'laptops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('/admin/comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin/comments/edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required',
            'comment_text' => 'bail|required|string',
            'active' => 'required'
        ]);

        $new_comment = Comment::find($valid['id']);

        if($new_comment->update($valid)){
            session()->flash('success', 'Comment was successfully edited');
        } else {
            session()->flash('error', 'There was a problem editing the comment');
        }

        return redirect('/admin/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_comment = Comment::find($id);
        $del_comment->delete();

        session()->flash('success', 'Comment was successfully deleted');
        return redirect('/admin/comments');
    }
}
