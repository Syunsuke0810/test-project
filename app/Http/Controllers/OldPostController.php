<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts=Post::whereDate('created_at','>=','2022-12-02')->orderBy('created_at','desc')->get();
        return view('post.index',compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        Gate::authorize('test');

        $validate = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validate['user_id'] = auth()->id();

        $post = Post::create($validate);
        $request->session()->flash('message','保存しました！');
        return back();
    }

    public function show(Post $post){
        return view('post.show',compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit',compact('post'));
    }

    public function update(Request $request,Post $post){
        $validate = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validate['user_id'] = auth()->id();

        $post -> update($validate);

        $request->session()->flash('message','更新しました！');
        return back();
    }

    public function destroy(Request $request,Post $post){
        $post->delete();
        $request->session()->flash('message','削除しました');
        return redirect()->route('post.index');
    }

}
