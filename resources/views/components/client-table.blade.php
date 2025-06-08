  
   
  
    
 

  <table class="tab1" >
    <tr><th>Nom et Prenom :</th>  <th>Email :</th> <th>Telephone</th>
    <th>Adresse</th>
     <th>Modifier</th> <th>Supprimer</th> </tr>
    <tr><td>{{$client->nom}} {{$client->prenom}}</td>   <td>{{$client->email}} </td> <td>{{$client->tele}}</td>
    <td>{{$client->adresse}}</td> <td> <form action="{{ route('clients.edit',$client->id) }} " method="GET">
  
     @csrf
     <button class="btn">Modifier</button>
  </form></td>
    <td>  <form action="{{ route('clients.destroy',$client->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?')">
     @method('DELETE')
     @csrf
         <button class="btn">Supprimer</button>
     </form></td></tr>
  
  </table>              
  <br>
  
  
  
  