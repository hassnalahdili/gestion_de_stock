
<x-master title="Categories"> 
   
 @include('partials.errors')
<center>
     <br>
     <br>
     <br>
<Fieldset class="fieldset">
<h3>Ajouter Categorie</h3>
<form method="post" action="{{ route('categories.store')}}" enctype="multipart/form-data">
 @csrf
 <div class="formcu">
<div > <label  >Nom : </label>
     <input type="text" name="nom"  value="{{old('nom')}}" /> </div>
<div ><label >Description : </label> 
    <input type="text" name="bio"   value="{{old('bio')}}" /> </div>
 
   <div > <button type="submit" class="btn "> Ajouter</button></div>
 </div>
</form>
</Fieldset>
</center>
</x-master>