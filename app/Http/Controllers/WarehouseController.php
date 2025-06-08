<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseRequest;
use App\Models\warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WarehouseController extends Controller
{public function __construct(){$this->middleware('auth');}
    public function index(){ $warehouses= warehouse::paginate(4);return view('warehouse.index',compact('warehouses'));}
public function show(string $id){
    $warehouses = Cache::remember('warehouse_'.$id, 10, function() use ($id){ 
    return warehouse::findOrFail($id);});
    return view('warehouse.show',compact('warehouses'));}
public function create(){return view('warehouse.create');}
public function store(WarehouseRequest $request) {$formFields = $request->validated();
    warehouse::create($formFields);
return redirect()->route('warehouses.index')->with('success',"L'entrepôt a était bien crée.");}

public function edit(warehouse $warehouse){return view('warehouse.edit',compact('warehouse'));}
public function update(WarehouseRequest $request, warehouse $warehouse){$formFields = $request->validated();
 $warehouse->fill($formFields)->save();
 return to_route('warehouses.index')->with('success'," L'entrepôt a était bien modifié");}
public function destroy(warehouse $warehouse)
    {$warehouse->delete();
        return to_route('warehouses.index')->with('success',"L'entrepôt a était bien supprimé");}
}

