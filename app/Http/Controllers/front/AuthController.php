<?php


namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
    public function login(LoginRequest $loginRequest)
    {
        $loginRequest->authenticate();
        $bool = $loginRequest->authorize();
        if (!$bool){
            toastr()->error("Phone or password not correct");
        }
        $loginRequest->session()->regenerate();
        return redirect()->route('dashboard');

    }
    public function register(Request $request)
    {
        if ($request->method()=="POST"){
            $user=new User();
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->sold=0.0;
            $user->sold_withdraw=0.0;
            $user->user_type=1;
            $user->password=bcrypt($request->get('password'));
            $user->save();
            if ($user instanceof Model) {
                toastr()->success('Data has been saved successfully!');

            }else{
                toastr()->error('An error has occurred please try again later.');
            }
        }

       return $this->login(LoginRequest::createFrom($request));
        //return redirect()->route('sign_in');

    }

}
