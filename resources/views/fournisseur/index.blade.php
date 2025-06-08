<x-master title=" Fournisseurs"> 
  
  <div class="divbarre"><a   href="{{route('fournisseurs.create')}}">
    <button class="btn2">Ajouter</button></a>
 <div id="barre"> @include('partials.barrefournisseur')</div></div>
 <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce compte?");
        return confirmation; 
        
    }
</script>
<h1>Fournisseur</h1>
<table class="tab1" >
  <tr><th>Nom  :</th>  <th>Email :</th> <th>Telephone</th>
  <th>Adresse</th>
   <th>Modifier</th> <th>Supprimer</th> </tr>
  @foreach ($fournisseurs as $fournisseur)

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
   @endforeach

</table>              
</div>               
<br>

<div class="pagination">{{$fournisseurs ->links() }} </div>

 </center> 

</x-master>
