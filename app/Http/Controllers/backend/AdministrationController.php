<?php


namespace App\Http\Controllers\backend;


use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Investiment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function transaction()
    {
        $user=Auth::user();
        $page_title = 'Transactions';
        $page_description = 'Some description for the page';
        $transactions=Transaction::query()->latest()->paginate(Helper::per_page);
        return view('bakend.transaction', compact('page_title', 'page_description','transactions'));
    }
    public function users(Request $request)
    {
        $page_title = 'Users';
        $page_description = 'Some description for the page';
        if ($request->method()=="POST"){
            $user=new User();
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->sold=0.0;
            $user->sold_withdraw=0.0;
            $user->user_type=0;
            $user->password=bcrypt($request->get('password'));
            $user->save();
        }
        $users=User::query()->latest()->paginate(Helper::per_page);
        return view('bakend.users', compact('page_title', 'page_description','users'));
    }
    public function user_detail(Request $request,$id)
    {
        $page_title = 'Detail User';
        $page_description = 'Some description for the page';
        $user=User::query()->find($id);
        $transactions=Transaction::query()->where(['user_id'=>$id])->latest()->paginate(Helper::per_page);
        $invests=Investiment::query()->where(['user_id'=>$id])->latest()->paginate(Helper::per_page);
        return view('bakend.user_detail', compact('page_title', 'page_description','user','transactions','invests'));
    }
    public function investiments()
    {
        $user=Auth::user();
        $page_title = 'Investiments';
        $page_description = 'Some description for the page';
        $investiments=Investiment::query()->orderBy('id')->latest()->paginate(Helper::per_page);
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
