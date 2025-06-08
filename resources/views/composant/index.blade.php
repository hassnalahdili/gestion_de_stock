<x-master title=" Composants"> 
    <div class="divbarre"><a   href="{{route('composants.create')}}"><button class="btn2">Ajouter</button></a>
   <div id="barre"> @include('partials.barre2')</div></div>
   <br><br><br>

<center>
   
<div class="cardsuser">
    <h1>Composants</h1>

@foreach ($composants as $composant)
<x-composant-card :composant="$composant"/>
@endforeach
</div>
<div class="pagination">{{$composants ->links() }} </div>
</center>



    </x-master>