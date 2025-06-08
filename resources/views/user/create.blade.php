
<x-master title="Employeurs"> 
   <br>
   <br>
   <br>
 @include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Ajouter Employer</h3>
<form method="post" action="{{ route('users.store')}}" enctype="multipart/form-data">
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
 <div ><label >Rôle : </label> 
    <select id="input" type="option" name="session_id"   value="{{old('session_id')}}" >
       <option value="">Sélectionnez un rôle </option>
       @foreach ($roles as $role)
        <option value="{{$role->id}}">{{$role->rol}}</option>
       @endforeach </select> </div>
  
<div><label  >Mot de passe : </label>
    <input type="password" name="password"  value="{{old('password')}}" /></div>
<div ><label  >Validation du mot de passe :</label>
<input type="password" name="password_confirmation"  /></div>
<div ><label  >Image :</label>
    <input type="file" name="image"  /></div>
   <div > <button type="submit" class="btn "> Ajouter</button></div>
 </div>
</form>
</Fieldset>
</center>
</x-master>