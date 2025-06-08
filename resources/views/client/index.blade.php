<x-master title=" Clients"> 
  
  <div class="divbarre"><a   href="{{route('clients.create')}}">
    <button class="btn2">Ajouter</button></a>
 <div id="barre"> @include('partials.barreclient')</div></div>
 <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce compte?");
        return confirmation; 
        
    }
</script>
<h1>Clients</h1>
<table class="tab1" >
  <tr><th>Nom  :</th>  <th>Email :</th> <th>Telephone</th>
  <th>Adresse</th>
   <th>Modifier</th> <th>Supprimer</th> </tr>
  @foreach ($clients as $client)

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
   @endforeach

</table>              
</div>               
<br>


<div class="pagination">{{$clients ->links() }} </div>

 </center> 

</x-master>
