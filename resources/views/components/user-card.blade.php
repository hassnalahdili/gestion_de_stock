
<div class="col1">
<div>
    <div class="card-body">
        <a href="{{ route('users.show', $user->id) }}" ><img class="imgcard" src="{{ asset('storage/'.$user->image)}}" alt="Title" width="200px" height="200px">
            <h4 class="card-title">{{$user->prenom.' '.$user->nom}}</h4>
        </a>
           
               
        </div>
        <div id="confirmation">      

        <div class="card-foot " style="z-index: 9">
            <form action="{{ route('users.destroy',$user->id) }}" method="post" onclick="return customConfirm()">
            @method('DELETE')
            @csrf
                <button class="btn">Supprimer</button>
            </form>

</div>     
           

            <form action="{{ route('users.edit',$user->id) }} " method="GET">
            
                @csrf
                <button class="btn">Modifier</button>
            </form>
        </div>
    </div>
</div>
