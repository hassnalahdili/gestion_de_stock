<x-master title=" Empoloyeurs"> 
  
    <div class="divbarre"><a   href="{{route('users.create')}}">
      <button class="btn2">Ajouter</button></a>
   <div id="barre"> @include('partials.barre')</div></div>
   <br><br><br>

 <center>
  
<div class="cardsuser">
  <script>
    function customConfirm() {
        const confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce compte ?");
        return confirmation; 
        
    }
</script>
<h1>Employeurs</h1>
@foreach ($users as $user)
<x-user-card :user="$user"/>
@endforeach
</div>
<div class="pagination">{{$users ->links() }}</div>

 </center> 
</x-master>
