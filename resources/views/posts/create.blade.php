<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.header')
@section('content')
    

<h1>Tạo bài viết</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' =>'POST']) !!}
<div class="form-group">
	{{Form::label('title', 'Tên nhà xưởng/KCN')}}
	{{Form::text('title', '', ['class'=> 'form-control','placeholder' => ''])}}
</div>
<div class="form-group">
	{{Form::label('decription', 'Mô tả')}}
	{{Form::textarea('decription', '', ['class'=> 'form-control','placeholder' => ''])}}
</div>

{{Form::submit('Tạo bài viết', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection