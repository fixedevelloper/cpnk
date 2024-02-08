<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Investiment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function transaction()
    {
        $user=Auth::user();
        $page_title = 'Transactions';
        $page_description = 'Some description for the page';
        $transactions=Transaction::query()->get();
        return view('bakend.transaction', compact('page_title', 'page_description','transactions'));
    }
    public function investiments()
    {
        $user=Auth::user();
        $page_title = 'Investiments';
        $page_description = 'Some description for the page';
        $investiments=Investiment::query()->orderBy('id')->get();
        return view('bakend.investment', compact('page_title', 'page_description','investiments'));
    }
    public function transaction_detail($id,Request $request)
    {
        $user=Auth::user();
        $page_title = 'Detail Transaction';
        $page_description = 'Some description for the page';
        $transaction=Transaction::query()->find($id);
        if ($request->method()=="POST"){
            if ($transaction->status !=="complete"){
                $transaction->amount=$request->get("amount");
                $transaction->status=$request->get("status");
                $transaction->save();
                if ($transaction->status=="complete"){
                    $user=$transaction->user;
                    $user->sold+=$transaction->amount;
                    $user->save();
                }
            }
            return redirect()->route("transaction");

        }
        return view('bakend.transaction_detail', compact('page_title', 'page_description','transaction'));
    }
}
