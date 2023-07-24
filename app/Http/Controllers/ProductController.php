<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function create()
    {
        return view('product.create');
    }

    public function contact_form()
    {
        return view('contact_form');
    }
}
