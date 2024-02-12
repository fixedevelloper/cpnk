<?php


namespace App\Http\Controllers\backend;


use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Investiment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function dashboard()
    {

        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;

        return view('bakend.dashboard', compact('page_title', 'page_description','action','logo','logoText'));
    }
    public function my_investment()
    {

        $page_title = 'My Investisment';
        $page_description = 'Some description for the page';
        $user=Auth::user();
        $invests=Investiment::query()->where(['user_id'=>$user->id])->latest()->paginate(Helper::per_page);
        return view('bakend.my_investment', compact('page_title', 'page_description','invests'));
    }
    public function my_withdraw()
    {
        $user=Auth::user();
        $page_title = 'My Withdraw';
        $page_description = 'Some description for the page';
        $withdraws=Transaction::query()->where(['type'=>'withdraw','user_id'=>$user->id])->latest()->paginate(Helper::per_page);
        return view('bakend.my_withdraw', compact('page_title', 'page_description','withdraws'));
    }
    public function my_deposit()
    {
        $user=Auth::user();
        $page_title = 'My Deposit';
        $page_description = 'Some description for the page';
        $deposits=Transaction::query()->where(['type'=>'deposit','user_id'=>$user->id])->latest()->paginate(Helper::per_page);
        return view('bakend.my_deposit', compact('page_title', 'page_description','deposits'));
    }
    public function make_deposit(Request $request)
    {
        $user=Auth::user();
        $page_title = 'Make Deposit';
        $page_description = 'Some description for the page';
        if ($request->method()=="POST"){
            $transaction=new Transaction();
            $transaction->type="deposit";
            $transaction->id_proof=$request->id_proof;
            $transaction->id_proof=$request->id_proof;
            $transaction->method_payment=$request->method_payment;
            $transaction->user_id=$user->id;
            $transaction->save();
            if ($transaction instanceof Model) {
                toastr()->success('Data has been saved successfully!');

            }else{
                toastr()->error('An error has occurred please try again later.');
            }
            return redirect()->route("my_deposit");
        }
        return view('bakend.make_deposit', compact('page_title', 'page_description'));
    }
    public function make_withdraw(Request $request)
    {
        $page_title = 'Make Withdraw';
        $user=Auth::user();
        $page_description = 'Some description for the page';
        if ($request->method()=="POST"){
            $transaction=new Transaction();
            $transaction->type="deposit";
            $transaction->id_proof=$request->id_proof;
            $transaction->id_proof=$request->id_proof;
            $transaction->method_payment=$request->method_payment;
            $transaction->user_id=$user->id;
            $transaction->save();
            return redirect()->route("my_deposit");
        }
        return view('bakend.make_withdraw', compact('page_title', 'page_description'));
    }
    public function make_investiment(Request $request)
    {
        $user=Auth::user();
        if ($user->sold<$request->amount || is_null($user->sold)){
            toastr()->error('Your balance is insufficient.');
            return redirect()->route('dashboard');
        }
        $invest=new Investiment();
        $invest->amount=$request->amount;
        $invest->user_id=$user->id;
        $invest->pourcentage=Helper::getPourcentage($request->amount);
        $invest->created_date=date('Y-m-d');
        $user->sold-=$request->amount;
        $invest->save();
        $user->save();
        if ($invest instanceof Model) {
            toastr()->success('Data has been saved successfully!');

        }else{
            toastr()->error('An error has occurred please try again later.');
        }
        return redirect()->route("my_investment");
    }
}
