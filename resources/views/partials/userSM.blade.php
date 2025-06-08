<div class="userSM " style="z-index: 9">
    <form action="{{ route('users.destroy',$user->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?')">
    @method('DELETE')
    @csrf
        <button class="btn">Supprimer</button>
    </form>

    <form action="{{ route('users.edit',$user->id) }} " method="GET">
    
        @csrf
        <button class="btn">Modifier</button>
    </form>
</div>