<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function list(){
    	return view('pages.list');
    }
    public function product(){
    	return view('pages.Product');
    }
     public function createPosts(){
    	return view('pages.createPost');
    }
    public function posts(){
        return view('posts.index');
    }

};