<?php


namespace App\Http\Controllers\front;


use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
}
