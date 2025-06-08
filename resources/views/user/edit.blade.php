<x-master title="Employeurs"> 
   
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Profile d'Employeur</h3>
<form method="post" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="formcu">
<div > <label  >Nom : </label>
   <input type="text" name="nom"  value="{{old('nom',$user->nom)}}"/> </div>
<div ><label >Prenom : </label> 
    <input type="text" name="prenom"  value="{{old('prenom',$user->prenom)}}"  /> </div>
<div> <label  >Email :</label>
<input type="text" name="email"     value="{{old('email',$user->email)}}" /></div>
<div><label  >Telephone : </label>
<input type="phoneNumber" name="tele"  value="{{old('tele',$user->tele)}}" /></div>
<div ><label  >Adresse :</label>
<input type="text" name="adresse" value="{{old('adresse',$user->adresse)}}" /></div>
<div ><label >Rôle : </label> 
    <select id="input" type="text" name="session_id" value="{{old('session_id',$user->session_id)}}">
        <option value="">Sélectionnez un rôle</option>
        @foreach ($roles as $role)
         <option value="{{$role->id}}"  @if ($role->id == old('session_id', $user->session_id)) selected @endif>{{$role->rol}}</option>
        @endforeach </select> </div>
<div><label  >Mot de passe : </label>
<input type="password" name="password"  value="{{old('password')}}" /></div>
<div ><label  >Validation du mot de passe :</label>
<input type="password" name="password_confirmation"  /></div>
<div ><label  >Image :</label>
<input type="file" name="image"  /></div>
<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>