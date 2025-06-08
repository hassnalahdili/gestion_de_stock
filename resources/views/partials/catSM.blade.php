<div class="userSM " style="z-index: 9">
    <form action="{{ route('categories.destroy',$categorie->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette categorie ?')">
    @method('DELETE')
    @csrf
        <button class="btn">Supprimer</button>
    </form>

    <form action="{{ route('categories.edit',$categorie->id) }} " method="GET">
    
        @csrf
        <button class="btn">Modifier</button>
    </form>
</div>