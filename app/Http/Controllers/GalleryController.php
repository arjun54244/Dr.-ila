<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::where('status', 1)->paginate(2);
        return view('gallery', compact('galleries'));
    }
    public function videos(){
        return view('videos');
    }
}
