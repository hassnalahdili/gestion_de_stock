<x-master title="Rôle "> 
  <br>
  <br>
  <br>
    <a   href="{{route('sessions.create')}}">
      <button class="btn2">Ajouter</button></a>

   <br><br><br>

 <center>
  

<table class="tab1" >
  <tr><th>Rôle :</th>  </tr> 
@foreach ($roles as $role)
    <tr><td>{{$role->rol}}</td></tr> 
  @endforeach
</table>              
</div>               
<br>

<div class="pagination">{{$roles ->links() }} </div>

 </center> 

</x-master>
