<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Flashy;
use Exception;
use App\Mail\NotifyUserMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function __invoke()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function getUsers()
    {
        return view("admin.user.index");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $item
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'email',
            'psw' => 'required'
        ]);

        try {
            User::create([
                'name' => $request->username,
                'phone_number' => $request->phonecode,
                'email' => $request->email,
                'password' => Hash::make($request->psw),
                'town'=> $request->ville
                ]);

        } catch (\Exception $ex) {
           if((\str_starts_with($ex,
                                "PDOException: SQLSTATE[23000]: Integrity constraint violation"))
                                && \str_contains($ex, "users_email_unique"))
           {
            Flashy::error("Cette adresse mail est déjà utilisée par un autre utilisateur");
            return redirect()->back();
           }
           elseif((\str_starts_with($ex,
                                "PDOException: SQLSTATE[23000]: Integrity constraint violation"))
                                && \str_contains($ex, "users_phone_number_unique"))
           {
            Flashy::error("Ce numéro de téléphone est déjà utilisé par un autre utilisateur");
            return redirect()->back();
           }
           else{
               dd($ex);
           }
        }


        if(auth()->attempt([
            'password' => $request->psw,
            'email' => $request->email,
        ], $request->remember)){

            return redirect()->route('send-signupMail');
        }
}

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
	{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Flashy::success("Authentification effectuée avec succès");
            return redirect()->route('admin.home');
        }
        Flashy::error("Mot de passe ou email incorrect");
        return back()->with('status', 'Mot de passe ou ID du compteur incorrect !');   
	}

    public function logout() {
        auth()->logout();
        return redirect()->intended('login');
    }
}
