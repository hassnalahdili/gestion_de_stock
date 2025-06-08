<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\user;
use App\Models\session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
class Usercontroller extends Controller
{ public function __construct(){$this->middleware('auth');}
 public function index (){ $users= user::paginate(4); return view ('user.index',compact('users'));}
 public function show(string $id){$users = Cache::remember('user_'.$id, 10, function() use ($id) {
 return user::findOrFail($id); });
return view('user.show',compact('users'));}
 public function create(){$roles= session::all();
            return view('user.create',compact('roles'));}
public function store(UserRequest $request){
 $formFields = $request->validated();
// Hash/Cryptage
 $formFields['password'] = Hash::make($request->password);
 $this->uploadImage($request,$formFields);
        // Insertion
        user::create($formFields);
        return redirect()->route('users.index')->with('success','le compte a était bien crée.');}
 public function destroy(user $user){
    
        $user->delete();
        return to_route('users.index')->with('success','Le compte a était bien supprimé'); }
    public function edit(user $user){$roles= session::all();
    return view('user.edit',compact('user','roles'));}
    
    public function update(UserRequest $request,user $user){
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request,$formFields);
        $user->fill($formFields)->save();
          return to_route('users.index')->with('success','Le compte a était bien modifié');}
 private function uploadImage(userRequest $request,array &$formFields){
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('user','public');} }
            // UserController.php
public function index1()
{ $users = User::with('session')->get();return $users;}
public function search(Request $request){ $category = $request->get('category');
     
         $key = trim($request->get('q'));
     switch ($category) {
     case 'nom': $users = User::where('nom', 'like', "%{$key}%")->get();break;
     case 'prenom':$users = User::where('prenom', 'like', "%{$key}%")->get(); break;
     case 'email':$users = User::where('email', 'like', "%{$key}%")->get();  break;
    case 'tele': $users = User::where('tele', 'like', "%{$key}%")->get(); break;
    case 'adresse': $users = User::where('adresse', 'like', "%{$key}%")->get(); break;
    case 'session_id': $users = user::where('session_id', 'like', "%{$key}%")->get(); break;
     default: $users = User::where('nom', 'like', "%{$key}%")->get();break; }
     return view('user.search', [ 'key' => $key, 'users' => $users, ]); }}


