<x-master title="Clients"> 
   
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Profile de client</h3>
<form method="post" action="{{ route('clients.update',$client->id) }}" >
        @method('PUT')
        @csrf
        <div class="formcu">
<div > <label  >Nom : </label>
   <input type="text" name="nom"  value="{{old('nom',$client->nom)}}"/> </div>
<div ><label >Prenom : </label> 
    <input type="text" name="prenom"  value="{{old('prenom',$client->prenom)}}"  /> </div>
<div> <label  >Email :</label>
<input type="text" name="email"     value="{{old('email',$client->email)}}" /></div>
<div><label  >Telephone : </label>
<input type="phoneNumber" name="tele"  value="{{old('tele',$client->tele)}}" /></div>
<div ><label  >Adresse :</label>
<input type="text" name="adresse" value="{{old('adresse',$client->adresse)}}" /></div>

<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>