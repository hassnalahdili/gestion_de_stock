<?php

namespace App\Http\Controllers;

use App\Http\Requests\AchatRequest;
use App\Models\Achat;
use App\Models\composant;
use App\Models\fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AchatController extends Controller
{ public function __construct(){$this->middleware('auth');}
public function index(){ $achats= achat::paginate(4);return view('achat.index',compact('achats'));}
public function show(string $id){$fournisseurs = fournisseur::all();$composants = composant::all();
$achats = Cache::remember('achat_'.$id, 10, function() use ($id){ return achat::findOrFail($id);});
return view('achat.show',compact('achats','fournisseurs','composants'));}
public function create(){$fournisseurs = fournisseur::all();$composants = composant::all();
$achats=achat::all(); return view('achat.create',compact('achats','fournisseurs','composants'));}
public function store(AchatRequest $request ) {$formFields = $request->validated();
achat::create($formFields);$produit = composant::find($formFields['composant_id']);
$produit->quantite += $formFields['quantite'];$produit->save();
return redirect()->route('achats.index')->with('success',"L'achat a était bien crée.");}
public function edit(achat $achat){$fournisseurs = fournisseur::all();$composants = composant::all();
    return view('achat.edit',compact('achat','fournisseurs','composants'));}
public function update(AchatRequest $request, achat $achat){$formFields = $request->validated();
 $achat->fill($formFields)->save();
 return to_route('achats.index')->with('success',"L'achat a était bien modifiée");}
public function destroy(achat $achat) {$achat->delete();
return to_route('achats.index')->with('success',"L'achat a était bien supprimée");}}
