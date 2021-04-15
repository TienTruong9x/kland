@extends('layouts.header')
@section('content')
<a href="/posts" class="btn btn-default"> Quay về</a>
<h1>{{$post->title}}</h1>
<div>
	Thông tin: {{$post->decription}}
</div>
<hr>
<small>Tạo lúc: {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Sửa</a>

{!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Xóa', ['class' =>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection