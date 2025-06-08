<x-master title="Clients"> 
  
<div >
    <div >
        <h3>Résultat de recherche pour : <small>{{ $key }}</small></h3>
        @foreach ($clients as $client)
        <x-client-table :client="$client"/>

        @endforeach
    </div>
</div>
</x-master>