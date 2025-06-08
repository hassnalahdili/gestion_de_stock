
<x-master title="Composantes"> 
 @include('partials.errors')
<center>
<Fieldset class="fieldset"><h3>Ajouter Composant</h3>
<form method="post" action="{{ route('composants.store')}}" enctype="multipart/form-data">
 @csrf
<div class="formcu">
<div > <label  >Nom : </label>
 <input type="text" name="name"  value="{{old('name')}}" /> </div>
<div ><label for="categorie_id">Categorie : </label> 
 <select id="input" type="option" name="categorie_id"   value="{{old('categorie_id')}}" >
<option value="">Sélectionnez une catégorie</option>
@foreach ($categories as $category)
 <option value="{{$category->id}}">{{$category->nom}}</option>
@endforeach </select> </div>
<div> <label  >Numero de serie :</label>
  <input type="number" name="serial_number"    value="{{old('serial_number')}}" /></div>
<div><label  >Quantite : </label>
     <input type="number" name="quantite"  value="{{old('quantite')}}" /></div>
<div ><label  >Prix d'Achat :</label>
 <input type="number" name="prix_achat" value="{{old('prix_achat')}}" /></div>
 <div ><label  >Prix de Vente :</label>
   <input type="number" name="prix_vente" value="{{old('prix_vente')}}" /></div>
 <div > <label  >Date Achat : </label>
    <input type="date" name="date_achat"  value="{{old('date_achat')}}" /> </div>
<div ><label >Emplacement : </label> 
   <select id="input" type="option" name="warehouse_id"   value="{{old('warehouse_id')}}" >
      <option value="">Sélectionnez un emplacement</option>
      @foreach ($warehouses as $warehouse)
       <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
      @endforeach </select> </div>
 <input type="file" name="image"/></div>
   <div > <button type="submit" class="btn"> Ajouter</button></div></div></form>
</Fieldset>
</center>
</x-master>