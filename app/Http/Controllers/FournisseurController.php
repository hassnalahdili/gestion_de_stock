<?php

namespace App\Http\Controllers;

use App\Http\Requests\FournisseurRequest;
use App\Models\fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FournisseurController extends Controller
{public function __construct(){$this->middleware('auth');}
public function index (){$fournisseurs= fournisseur::paginate(4);return view ('fournisseur.index',compact('fournisseurs'));
     }
 public function show(string $id){ $clients = Cache::remember('fournisseur_'.$id, 10, function() use ($id) {
return fournisseur::findOrFail($id); }); return view('fournisseur.show',compact('fournisseurs'));}
 public function create(){return view('fournisseur.create');}
public function store(FournisseurRequest $request){ $formFields = $request->validated(); fournisseur::create($formFields);
 return redirect()->route('fournisseurs.index')->with('success','le compte a était bien crée.');}
 public function destroy(fournisseur $fournisseur){ $fournisseur->delete();
return to_route('fournisseurs.index')->with('success','Le compte a était bien supprimé'); }
 public function edit(fournisseur $fournisseur){return view('fournisseur.edit',compact('fournisseur'));}
 public function update(FournisseurRequest $request,fournisseur $fournisseur){
  $formFields = $request->validated(); $fournisseur->fill($formFields)->save();
return to_route('fournisseurs.index')->with('success','Le compte a était bien modifié');}
 public function search(Request $request){ $category = $request->get('category');
     $key = trim($request->get('q')); switch ($category) {
     case 'nom': $fournisseur = fournisseur::where('nom', 'like', "%{$key}%")->get();break;
     case 'prenom':$fournisseur = fournisseur::where('prenom', 'like', "%{$key}%")->get(); break;
     case 'email':$fournisseur = fournisseur::where('email', 'like', "%{$key}%")->get();  break;
    case 'tele': $fournisseur = fournisseur::where('tele', 'like', "%{$key}%")->get(); break;
    case 'adresse': $fournisseur = fournisseur::where('adresse', 'like', "%{$key}%")->get(); break;
     default: $fournisseur = fournisseur::where('nom', 'like', "%{$key}%")->get();break; }
     return view('client.search', [ 'key' => $key, 'clients' => $fournisseur, ]); }}
