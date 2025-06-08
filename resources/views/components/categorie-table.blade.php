    <div class="show">
   <table class="tab">
       <tr><th>Nom :</th>  <th>Description :</th> <th>Modifier</th> <th>Supprimer</th> </tr>
       @foreach ($categories as $categorie)

       <tr><td>{{$categorie->nom}}</td>   <td>{{$categorie->bio}} </td>
         <td> <form action="{{ route('categories.edit',$categorie->id) }} " method="GET">
     @csrf
        <button class="btn">Modifier</button>
    </form></td>
       <td>  <form action="{{ route('categories.destroy',$categorie->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette categorie ?')">
        @method('DELETE')
        @csrf
            <button class="btn">Supprimer</button>
        </form></td></tr>   @endforeach           

        

   </table>   
   </div>               
 <br>
