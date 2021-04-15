@extends('layouts.header')
	@extends('inc.messages')

@section('content')

	<h1>Bài viết</h1>
	
@if(count($posts) > 0)
@foreach($posts as $post)
<div >
	<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
	<small>Tạo lúc: {{$post -> created_at}}</small>
	<hr>
</div>
@endforeach
@else
<p>Chưa có bài viết nào</p>
@endif
<a href="/posts/create" class="btn btn-default"> Tạo bài viết</a>


@endsection