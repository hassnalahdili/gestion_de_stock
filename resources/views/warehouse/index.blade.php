<x-master title=" Entrepôts"> 
  
    <a   href="{{route('warehouses.create')}}">
      <button class="btn2">Ajouter</button></a>

   <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer cet entrepôt?");
        return confirmation; 
        
    }
</script>
<h1>Entrepôts</h1>

<table class="tab1" >
  <tr><th>Nom :</th>   <th>Modifier</th> <th>Supprimer</th> </tr>
  @foreach ($warehouses as $warehouse)

  <tr><td>{{$warehouse->name}}</td>    <td> <form action="{{ route('warehouses.edit',$warehouse->id) }} " method="GET">

   @csrf
   <button class="btn">Modifier</button>
</form></td>
  <td>  <form action="{{ route('warehouses.destroy',$warehouse->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet entrepôt ?')">
   @method('DELETE')
   @csrf
       <button class="btn">Supprimer</button>
   </form></td></tr>
   @endforeach

</table>              
</div>               
<br>

<div class="pagination">{{$warehouses ->links() }} </div>

 </center> 

</x-master>
