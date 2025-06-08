<?php

namespace App\Http\Controllers;

use App\Http\Requests\composantrequest;
use App\Models\categorie;
use App\Models\composant;
use App\Models\warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class composantcontroller extends Controller
{ public function __construct(){$this->middleware('auth');}
   public function index (){
$composants= composant::paginate(4); return view ('composant.index',compact('composants'));}
 public function show(string $id){$categories = categorie::all();$warehouses = warehouse::all();
$composants = Cache::remember('composant_'.$id, 10, function() use ($id){ 
return composant::findOrFail($id);});
return view('composant.show',compact('composants','categories','warehouses'));}
 public function create(){  $categories = categorie::all();$warehouses = warehouse::all();

    return view('composant.create',compact('categories','warehouses'));}
 public function store(composantRequest $request){
  $formFields = $request->validated();
 $this->uploadImage($request,$formFields);
composant::create($formFields);
 return redirect()->route('composants.index')->with('success','le composant a était bien crée.');}
public function destroy(composant $composant){ $composant->delete();
 return to_route('composants.index')->with('success','Le composant a était bien supprimé');}
 public function edit(composant $composant){ $categories = categorie::all();$warehouses = warehouse::all();
   return view('composant.edit',compact('composant','categories','warehouses')); }
public function update(composantRequest $request,composant $composant){
$formFields = $request->validated();
$this->uploadImage($request,$formFields);
$composant->fill($formFields)->save();
return to_route('composants.index')->with('success','Le composant a était bien modifié');}
 private function uploadImage(composantRequest $request,array &$formFields){
 unset($formFields['image']);
if($request->hasFile('image')){
$formFields['image'] = $request->file('image')->store('composant','public'); }}
public function search(Request $request){$category = $request->get('category');
$key = trim($request->get('q'));
switch ($category) {
case 'name':$composants = composant::where('name', 'like', "%{$key}%")->get();break;
case 'categorie_id':$composants = composant::where('categorie_id', 'like', "%{$key}%")->get();break;
case 'serial_number':$composants = composant::where('serial number', 'like', "%{$key}%")->get();break;
case 'quantite':$composants = composant::where('quantite', 'like', "%{$key}%")->get();break;
case 'prix_achat':$composants = composant::where('prix_achat', 'like', "%{$key}%")->get();break;
case 'prix_vente':$composants = composant::where('prix_vente', 'like', "%{$key}%")->get();break;
case 'date_achat':$composants = composant::where('date achat', 'like', "%{$key}%")->get();break;
case 'warehouse_id':$composants = composant::where('warehouse_id', 'like', "%{$key}%")->get();break;
default:$composants = composant::where('name', 'like', "%{$key}%")->get();break;}
return view('composant.search', ['key' => $key,'composants' => $composants,]); }}




