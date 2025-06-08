  
   
  
    
 

  <table class="tab1" >
    <tr><th>Nom et Prenom :</th>  <th>Email :</th> <th>Telephone</th>
    <th>Adresse</th>
     <th>Modifier</th> <th>Supprimer</th> </tr>
    <tr><td>{{$fournisseur->nom}} {{$fournisseur->prenom}}</td>   <td>{{$fournisseur->email}} </td> <td>{{$fournisseur->tele}}</td>
    <td>{{$fournisseur->adresse}}</td> <td> <form action="{{ route('fournisseurs.edit',$fournisseur->id) }} " method="GET">
  
     @csrf
     <button class="btn">Modifier</button>
  </form></td>
    <td>  <form action="{{ route('fournisseurs.destroy',$fournisseur->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?')">
     @method('DELETE')
     @csrf
         <button class="btn">Supprimer</button>
     </form></td></tr>
  
  </table>              
  <br>
  
  
  
  