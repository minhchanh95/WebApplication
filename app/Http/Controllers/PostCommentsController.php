<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::paginate(5);

        return view('admin.comments.index', ['comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($user = Auth::user()){

            $data = [

                'post_id'=> $request->post_id,
                'author'=> $user->name,
                'email'=> $user->email,
                'photo'=> $user->photo->file,
                'body'=>$request->body,
                'is_active'=>$request->is_active

            ];

            Comment::create($data);

            $request->session()->flash('comment_message', 'Your message has been submitted');

            return redirect()->back();
        }else{
            $request->session()->flash('comment_message', 'You must be login before comment');
            return redirect('/login');
        }




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
        $post = Post::findOrFail($id);

        $comments = $post->comments;

        return view('admin.comments.show',['comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //

        Comment::findOrFail($id)->update($request->all());

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
        //

        Comment::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function post($slug){

        $post = Post::findBySlugOrFail($slug);

        $comments = $post->comments()->whereIsActive(1)->get();

        return view('post',['post'=>$post,'comments'=>$comments]);


    }
}
