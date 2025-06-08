<x-master title=" Ventes"> 
  
    <a   href="{{route('ventes.create')}}">
      <button class="btn2">Ajouter</button></a>

   <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce vente ?");
        return confirmation; 
        
    }
</script>
<h1>Ventes</h1>

<table class="tab1" >
  <tr><th>Client :</th>  <th>Composant :</th> <th>Quantite</th> <th>Prix</th> <th>Date</th>
  <th>Modifier</th>
  <th>Supprimer</th></tr>
  @foreach ($ventes as $vente)

  <tr><td>{{$vente->client->nom}} {{$vente->client->prenom}}</td>   <td>{{$vente->composant->name}} </td><td>{{$vente->quantite}}</td>
  <td>{{$vente->prix}}</td>
  <td>{{$vente->date}}</td> <td> <form action="{{ route('ventes.edit',$vente->id) }} " method="GET">

   @csrf
   <button class="btn">Modifier</button>
</form></td>
  <td>  <form action="{{ route('ventes.destroy',$vente->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vente ?')">
   @method('DELETE')
   @csrf
       <button class="btn">Supprimer</button>
   </form></td></tr>
   @endforeach

</table>              
</div>               
<br>

<div class="pagination">{{$ventes ->links() }} </div>

 </center> 

</x-master>
