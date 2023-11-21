<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        return view('admin.index');
    }
    public function index()
    {
        return view('admin.index');
    }
}
