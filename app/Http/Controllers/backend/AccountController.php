<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function profil(Request $request)
    {
        $user=Auth::user();
        $page_title = 'Profil';
        $page_description = 'Some description for the page';
        return view('bakend.profil', compact('page_title', 'page_description','user'));
    }
}
