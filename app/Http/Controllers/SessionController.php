<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\session;
use Illuminate\Http\Request;

class SessionController extends Controller
{ public function __construct(){$this->middleware('auth');}
    public function index (){$roles = session::paginate(4);
    return view ('role.index',compact('roles'));
     }    public function create(){return view('role.create');}
public function store(SessionRequest $request) {$formFields = $request->validated();
    session::create($formFields);
return redirect()->route('sessions.index')->with('success','le rôle a était bien crée.');}
}
