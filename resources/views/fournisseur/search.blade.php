<x-master title="Fournisseurs"> 
  
<div >
    <div >
        <h3>Résultat de recherche pour : <small>{{ $key }}</small></h3>
        @foreach ($fournisseurs as $fournisseur)
        <x-fournisseur-table :fournisseur="$fournisseur"/>

        @endforeach
    </div>
</div>
</x-master>