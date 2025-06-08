<br>
<br>
<br>
<fieldset class="fieldset2">
    <img class="imgshow" src="{{ asset('storage/'.$user->image)}}" alt="Title" width="200px" height="200px">
    @include('partials.userSM')
    <div class="show">
   <table class="tab2">
       <tr><td>Nom :</td>   <td>{{$user->nom}}</td></tr>
       <tr><td>Prenom :</td>   <td>{{$user->prenom}}</td></tr>
       <tr><td>Email :</td>   <td>{{$user->email}}</td></tr>
       <tr><td>Telephone :</td>   <td>{{$user->tele}}</td></tr>
       <tr><td>Adresse :</td>   <td>{{$user->adresse}}</td></tr>
       <tr><td>Rôle :</td>   <td>{{$user->session->rol}}</td></tr>
       
  </table>              
   </div>               
</fieldset>  <br>