<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategorieController extends Controller
{public function __construct(){$this->middleware('auth');}
public function index(){ $categories= categorie::paginate(4);return view('categorie.index',compact('categories'));}
public function show(string $id){
    $categories = Cache::remember('categorie_'.$id, 10, function() use ($id){ 
    return categorie::findOrFail($id);});
    return view('categorie.show',compact('categories'));}
public function create(){return view('categorie.create');}
public function store(CategorieRequest $request) {$formFields = $request->validated();
categorie::create($formFields);
return redirect()->route('categories.index')->with('success','la categorie a était bien crée.');}

public function edit(categorie $category){return view('categorie.edit',compact('category'));}
public function update(CategorieRequest $request, categorie $category){$formFields = $request->validated();
 $category->fill($formFields)->save();
 return to_route('categories.index')->with('success','La categorie a était bien modifiée');}
public function destroy(categorie $category)
    {$category->delete();
        return to_route('categories.index')->with('success','La categorie a était bien supprimée');}

}

