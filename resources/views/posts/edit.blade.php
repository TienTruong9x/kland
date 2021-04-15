<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.header')
@extends('layouts.products')
@section('content')
    

<h1>Sửa bài viết</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' =>'POST']) !!}
<div class="form-group">
	{{Form::label('title', 'Tên nhà xưởng/KCN')}}
	{{Form::text('title', $post->title, ['class'=> 'form-control','placeholder' => ''])}}
</div>
<div class="form-group">
	{{Form::label('decription', 'Mô tả')}}
	{{Form::textarea('decription', $post->decription, ['class'=> 'form-control','placeholder' => ''])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Xác nhận', ['class' =>'btn btn-primary'])}}


{!! Form::close() !!}
@endsection