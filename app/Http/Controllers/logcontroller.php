<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class logcontroller extends Controller
{ public function show(){ return view('login.show'); }
public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email'=> $email,'password'=> $password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if($email =='hassna@gmail.com'&& $password == 'hassna@gmail.com'){
            return to_route('homepage')->with('success','Vous étes bien connecté.'. $email .'.');}
            else{ return to_route('homepage2')->with('success','Vous étes bien connecté.'. $email .'.');}
        }else{
            return back()->withErrors(['email'=> 'Email ou mot de passe incorrect '])->onlyInput('email'); } }
             public function logout(){
    Session::flush();
        Auth::logout();
        return to_route('login')->with('success','Vous étes bien deconnecté'); }
}
