<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }
    
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "title"=>"required|unique:posts",
            "body"=>"required"
        ]);
        $query = DB::table('posts')->insert(
            ["title"=>$request["title"], "body"=>$request["body"]]
        );

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Disimpan');
    }

    public function index(){
        $posts = DB::table('posts')->get(); //kaya select * from posts
        return view('post.index',compact('posts'));
    }

    public function show($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('post.show',compact('post'));
    }

    public function edit($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('post.edit',compact('post'));
    }

    public function update($id, Request $request){
        $query = DB::table('posts')
                    ->where('id',$id)
                    ->update([
                        "title"=>$request['title'],
                        "body"=>$request['body']
                    ]);
        return redirect('/pertanyaan')->with('success','Berhasil update pertanyaan!');  
    }

    public function destroy($id){
        $query = DB::table('posts')
                    ->where('id',$id)
                    ->delete();

        return redirect('/pertanyaan')->with('success','Pertanyaan Berhasil Dihapus');
    }
}
