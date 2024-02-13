<?php


namespace App\Http\Controllers\backend;


use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function profil(Request $request)
    {
        $user=Auth::user();
        $page_title = 'Profil';
        $page_description = 'Some description for the page';
        if ($request->method()=="POST"){
            $user->last_name=$request->last_name;
            $user->alternate_contact=$request->alternate_contact;
            $user->town=$request->town;
            $user->company_name=$request->company_name;
            $user->two_factor=$request->two_factor;
            $user->country=$request->country;
            if (!is_null($request->password)){
                $user->password=bcrypt($request->get('password'));
            }
            $user->save();
        }
        return view('bakend.profil', compact('page_title', 'page_description','user'));
    }
    public function updatePhoto(Request $request)
    {
        $user=Auth::user();

       $this->validate($request, [
            'photo' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $newFilename = uniqid() . '.' . $request->photo->extension();
        if (!Storage::disk('public')->exists("uploads")) {
            Storage::disk('public')->makeDirectory("uploads");
        }
        $path = $request->file('photo')->storeAs(
            'public/uploads', $newFilename
        );
        $user->image = $newFilename;
        $user->save();
        logger($path);
            return back();
    }
}
