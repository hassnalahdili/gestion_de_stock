<?php

namespace App\Http\Controllers;

use App\Http\Requests\VenteRequest;
use App\Models\client;
use App\Models\composant;
use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VenteController extends Controller
{ public function __construct(){$this->middleware('auth');}
 public function index(){ $ventes= vente::paginate(4);return view('vente.index',compact('ventes'));}
public function show(string $id){$clients = client::all();$composants = composant::all();
 $ventes = Cache::remember('vente_'.$id, 10, function() use ($id){ 
return vente::findOrFail($id);});return view('vente.show',compact('ventes','clients','composants'));}
public function create(){$clients = client::all();$composants = composant::all();
return view('vente.create',compact('clients','composants'));}
public function store(VenteRequest $request) {$formFields = $request->validated();
 vente::create($formFields); $produit = composant::find($formFields['composant_id']);
 $produit->quantite -= $formFields['quantite']; $produit->save();
return redirect()->route('ventes.index')->with('success','la vente a était bien crée.');}
public function edit(vente $vente){$clients = client::all();$composants = composant::all();
    return view('vente.edit',compact('vente','clients','composants'));}
public function update(venteRequest $request, vente $vente){$formFields = $request->validated();
 $vente->fill($formFields)->save();
 return to_route('ventes.index')->with('success','La vente a était bien modifiée');}
public function destroy(vente $vente)
 {$vente->delete(); return to_route('ventes.index')->with('success','La vente a était bien supprimée');}}
