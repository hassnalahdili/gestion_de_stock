<div class="col1">
<div>
    <div class="card-body">
        <a href="{{ route('composants.show', $composant->id) }}" ><img class="imgcard" src="{{ asset('storage/'.$composant->image)}}" alt="Title" width="200px" height="200px">
            <h4 class="card-title">{{$composant->name}}</h4>
        </a>


        </div>

        <div class="card-foot " style="z-index: 9">
            <form action="{{ route('composants.destroy',$composant->id) }}" method="post"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce composant ?')">
            @method('DELETE')
            @csrf
                <button class="btn">Supprimer</button>
            </form>

            <form action="{{ route('composants.edit',$composant->id) }} " method="GET">

                @csrf
                <button class="btn">Modifier</button>
            </form>
        </div>
    </div>
</div>
