<x-master title="Composants"> 
<div >
    <div >
        <h3>Résultat de recherche pour : <small>{{ $key }}</small></h3>
        @foreach ($composants as $composant)
        <x-composant-table :composant="$composant"/>

        @endforeach
    </div>
</div>
</x-master>