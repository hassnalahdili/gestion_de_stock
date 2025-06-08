<x-master title="Employeurs"> 
  
<div >
    <div >
        <h3>Résultat de recherche pour : <small>{{ $key }}</small></h3>
        @foreach ($users as $user)
        <x-user-table :user="$user"/>

        @endforeach
    </div>
</div>
</x-master>