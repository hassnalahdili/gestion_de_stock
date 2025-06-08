<x-master title=" Achats"> 
  
    <a   href="{{route('achats.create')}}">
      <button class="btn2">Ajouter</button></a>

   <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer cet achat ?");
        return confirmation; 
        
    }
</script>
<h1>Achats</h1>
<table class="tab1" >
  <tr><th>Fournisseur :</th>  <th>Composant :</th> <th>Quantite</th> <th>Prix</th> <th>Date</th>
  <th>Modifier</th>
  <th>Supprimer</th></tr>
  @foreach ($achats as $achat)

  <tr><td>{{$achat->fournisseur->nom}} {{$achat->fournisseur->prenom}}</td>   <td>{{$achat->composant->name}} </td><td>{{$achat->quantite}}</td>
  <td>{{$achat->prix}}</td>
  <td>{{$achat->date}}</td> <td> <form action="{{ route('achats.edit',$achat->id) }} " method="GET">

   @csrf
   <button class="btn">Modifier</button>
</form></td>
  <td>  <form action="{{ route('achats.destroy',$achat->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet achat ?')">
   @method('DELETE')
   @csrf
       <button class="btn">Supprimer</button>
   </form></td></tr>
   @endforeach

</table>              
</div>               
<br>


<div class="pagination">{{$achats ->links() }} </div>

 </center> 

</x-master>
