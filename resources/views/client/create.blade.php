
<x-master title="Clients"> 
   
 @include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Ajouter Client</h3>
<form method="post" action="{{ route('clients.store')}}" >
 @csrf
 <div class="formcu">
<div > <label  >Nom : </label>
     <input type="text" name="nom"  value="{{old('nom')}}" /> </div>
<div ><label >Prenom : </label> 
    <input type="text" name="prenom"   value="{{old('prenom')}}" /> </div>
 <div> <label  >Email :</label>
  <input type="text" name="email"    value="{{old('email')}}" /></div>
<div><label  >Telephone : </label>
     <input type="phoneNumber" name="tele"  value="{{old('tele')}}" /></div>
<div ><label  >Adresse :</label>
 <input type="text" name="adresse" value="{{old('adresse')}}" /></div>

   <div > <button type="submit" class="btn "> Ajouter</button></div>
 </div>
</form>
</Fieldset>
</center>
</x-master>