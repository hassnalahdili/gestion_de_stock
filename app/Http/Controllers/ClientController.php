<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ClientController extends Controller
{ public function __construct(){$this->middleware('auth');}
    public function index (){$clients= client::paginate(4);return view ('client.index',compact('clients')); }
 public function show(string $id){  $clients = Cache::remember('client_'.$id, 10, function() use ($id) {
   return client::findOrFail($id); }); return view('client.show',compact('clients'));}
 public function create(){ return view('client.create');}
public function store(ClientRequest $request){
 $formFields = $request->validated();client::create($formFields);
  return redirect()->route('clients.index')->with('success','le compte a était bien crée.');}
 public function destroy(client $client){ $client->delete();
    return to_route('clients.index')->with('success','Le compte a était bien supprimé'); }
 public function edit(client $client){ return view('client.edit',compact('client'));}
public function update(ClientRequest $request,client $client){
  $formFields = $request->validated();$client->fill($formFields)->save();
 return to_route('clients.index')->with('success','Le compte a était bien modifié');}
public function search(Request $request){ $category = $request->get('category');
         $key = trim($request->get('q'));
     switch ($category) {
     case 'nom': $clients = client::where('nom', 'like', "%{$key}%")->get();break;
     case 'prenom':$clients = client::where('prenom', 'like', "%{$key}%")->get(); break;
     case 'email':$clients = client::where('email', 'like', "%{$key}%")->get();  break;
    case 'tele': $clients = client::where('tele', 'like', "%{$key}%")->get(); break;
    case 'adresse': $clients = client::where('adresse', 'like', "%{$key}%")->get(); break;
     default: $clients = client::where('nom', 'like', "%{$key}%")->get();break; }
     return view('client.search', [ 'key' => $key, 'clients' => $clients, ]); }}
