<div class="userSM " style="z-index: 9">
    <form action="{{ route('composants.destroy',$composant->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce composant?')">
    @method('DELETE')
    @csrf
        <button class="btn">Supprimer</button>
    </form>

    <form action="{{ route('composants.edit',$composant->id) }} " method="GET">
    
        @csrf
        <button class="btn">Modifier</button>
    </form>
</div>