<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
    $posts = Post::orderBy('created_at', 'desc')->paginate(10);
return view('posts.index')-> with('posts', $posts);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('posts.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$this->validate($request,[
'title' =>'required',
'decription' =>'required'
]);

//create posts
$post = new Post;
$post->title = $request->input('title');
$post->decription = $request->input('decription');
$post->save();
return redirect('/posts')->with('success', 'Tạo bài viết thành công!!');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($title)
{
$posts = Post::find($title);
return view('posts.show')-> with('post', $posts);
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
    $post= Post::find($id);
    return view('posts.edit')->with('post', $post);
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
$this->validate($request,[
'title' =>'required',
'decription' =>'required'
]);

//create posts
$post = Post::find($id);
$post->title = $request->input('title');
$post->decription = $request->input('decription');
$post->save();
return redirect('/posts')->with('success', 'Sửa thành công!!');}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$post = POST::find($id);
$post->delete();
return redirect('/posts')->with('success', 'Xóa thành công!!');}


}