
<x-master title="Rôle"> 
   
 @include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Ajouter Rôle</h3>
<form method="post" action="{{ route('sessions.store')}}" enctype="multipart/form-data">
 @csrf
 <div class="formcu">
<div > <label  >Rôle : </label>
     <input type="text" name="rol"  value="{{old('rol')}}" /> </div>

   <div > <button type="submit" class="btn "> Ajouter</button></div>
 </div>
</form>
</Fieldset>
</center>
</x-master>