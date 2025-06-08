
<x-master title="Entrepôts"> 
   
 @include('partials.errors')
<center>
  <br>
  <br>
  <br>
  <br>
<Fieldset class="fieldset">
<h3>Ajouter Entrepôt</h3>
<form method="post" action="{{ route('warehouses.store')}}" enctype="multipart/form-data">
 @csrf
 <div class="formcu">
<div > <label  >Nom : </label>
     <input type="text" name="name"  value="{{old('name')}}" /> </div>
 
   <div > <button type="submit" class="btn "> Ajouter</button></div>
 </div>
</form>
</Fieldset>
</center>
</x-master>