<?php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Purchase;
use App\Models\Basket;
use Illuminate\Http\Request;
use DB;
use Flashy;

class PageController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }

    public function index()
    {
        return view('index');
    }
    public function authUser()
    {
        return view('admin.user.auth');
    }
}
