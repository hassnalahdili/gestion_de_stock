<x-master title="Fournisseurs"> 
   
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Profile du Fournisseur</h3>
<form method="post" action="{{ route('fournisseurs.update',$fournisseur->id) }}" >
        @method('PUT')
        @csrf
        <div class="formcu">
<div > <label  >Nom : </label>
   <input type="text" name="nom"  value="{{old('nom',$fournisseur->nom)}}"/> </div>
<div ><label >Prenom : </label> 
    <input type="text" name="prenom"  value="{{old('prenom',$fournisseur->prenom)}}"  /> </div>
<div> <label  >Email :</label>
<input type="text" name="email"     value="{{old('email',$fournisseur->email)}}" /></div>
<div><label  >Telephone : </label>
<input type="phoneNumber" name="tele"  value="{{old('tele',$fournisseur->tele)}}" /></div>
<div ><label  >Adresse :</label>
<input type="text" name="adresse" value="{{old('adresse',$fournisseur->adresse)}}" /></div>

<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>