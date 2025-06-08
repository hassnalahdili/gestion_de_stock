<x-master title="Composant">
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Composant</h3>
<form method="post" action="{{ route('composants.update',$composant->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="formcu">
<div > <label  >Name : </label>
   <input type="text" name="name"  value="{{old('name',$composant->name)}}"/> </div>
<div ><label >Categorie : </label>
    <select id="input" type="texte" name="categorie_id"  value="{{old('categorie_id',$composant->categorie_id)}}"  >
        <option value="">Sélectionnez une catégorie</option>
        @foreach ($categories as $category)
         <option value="{{$category->id}}" @if ($category->id == old('categorie_id', $composant->categorie_id)) selected @endif>{{$category->nom}}</option>
        @endforeach </select> </div>
<div> <label  >Serial number :</label>
<input type="number" name="serial_number"     value="{{old('serial_number',$composant->serial_number)}}" /></div>
<div><label  >Quantite : </label>
<input type="number" name="quantite"  value="{{old('quantite',$composant->quantite)}}" /></div>
<div ><label  >Prix d'Achat :</label>
    <input type="number" name="prix_achat"  value="{{old('prix_achat',$composant->prix_achat)}}" /></div>
    <div ><label  >Prix de Vente :</label>
        <input type="number" name="prix_vente" value="{{old('prix_vente',$composant->prix_vente)}}" /></div>
<div > <label  >Date Achat : </label>
<input type="date" name="date_achat"  value="{{old('date_achat',$composant->date_achat)}}" /> </div>
<div ><label >Emplacement : </label>
<select id="input" type="text" name="warehouse_id" value="{{old('warehouse_id',$composant->warehouse_id)}}">
    <option value="">Sélectionnez un emplacement</option>
    @foreach ($warehouses as $warehouse)
     <option value="{{$warehouse->id}}"  @if ($warehouse->id == old('warehouse_id', $composant->warehouse_id)) selected @endif>{{$warehouse->name}}</option>
    @endforeach </select> </div>
<div ><label  >Image :</label>
<input type="file" name="image"  /></div>
<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>
