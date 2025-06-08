<x-master title="Page d'accueil">
  <center>
 <div class="dash">

  <a href="{{route('clients.index')}}"><div id="d2"><p>Nombre des clients</p><p id="p1">{{$clients}}</p></div></a> 
  <a href="{{route('fournisseurs.index')}}"><div id="d3"><p>Nombre des fournisseurs</p><p id="p1">{{$fournisseurs}}</p></div></a> 
<a   href="{{route('composants.index')}}"><div id="d4"><p>Nombre des composants</p><p id="p1">{{$composants}}</p></div></a>
<a   href="{{route('achats.index')}}"><div id="d5"><p>Nombre des achats</p><p id="p1">{{$achats}}</p></div></a> 
<a   href="{{route('ventes.index')}}"><div id="d7"><p>Nombre des ventes</p><p id="p1">{{$ventes}}</p></div></a> 

</div>
</center>
</x-master>
    
    