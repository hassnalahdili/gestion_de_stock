<x-master title=" Catégories"> 
  
    <a   href="{{route('categories.create')}}">
      <button class="btn2">Ajouter</button></a>

   <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer cette categorie ?");
        return confirmation; 
        
    }
</script>
<h1>Catégories</h1>
<table class="tab1" >
  <tr><th>Nom :</th>  <th>Description :</th> <th>Modifier</th> <th>Supprimer</th> </tr>
  @foreach ($categories as $category)

  <tr><td>{{$category->nom}}</td>   <td>{{$category->bio}} </td> <td> <form action="{{ route('categories.edit',$category->id) }} " method="GET">

   @csrf
   <button class="btn">Modifier</button>
</form></td>
  <td>  <form action="{{ route('categories.destroy',$category->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">
   @method('DELETE')
   @csrf
       <button class="btn">Supprimer</button>
   </form></td></tr>
   @endforeach

</table>              
</div>               
<br>

<div class="pagination">{{$categories ->links() }} </div>

 </center> 

</x-master>
