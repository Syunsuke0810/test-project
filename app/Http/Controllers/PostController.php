<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mycomment(){
        $user=auth()->user()->id;
        $comments=Comment::where('user_id',$user)->orderBy('created_at','desc')->get();
        return view('post.mycomment',compact('comments'));
    }

    public function mypost(){
        $user=auth()->user()->id;
        $posts=Post::where('user_id',$user)->orderBy('created_at','desc')->get();
        return view('post.mypost',compact('posts'));
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $user=auth()->user();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs=request()->validate([
            'title'=>'required|max:255',
            'body'=>'required|max:1000',
            'image'=>'image|max:1024'
        ]);
        $post=new Post();
        $post->title=$inputs['title'];
        $post->body=$inputs['body'];
        $post->user_id=auth()->user()->id;

        if (request('image')){
            $original = request()->file('image')->getClientOriginalName();
             // 日時追加
            $name = date('Ymd_His').'_'.$original;
            request()->file('image')->move('storage/images', $name);
            $post->image = $name;
        }
        $post->save();
        return redirect()->route('post.create')->with('message', '投稿を作成しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update',$post);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update',$post);
        $validate = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:400'
        ]);

        $validate['user_id'] = auth()->id();
        $post -> update($validate);

        $request->session()->flash('message','更新しました！！！');
        return redirect()->route('post.show',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Post $post)
    {
        $this->authorize('delete',$post);
        $post->comments()->delete();
        $post->delete();
        $request->session()->flash('message','削除しました');
        return redirect()->route('post.index')->with('message','投稿を削除しました！！');
    }
}
