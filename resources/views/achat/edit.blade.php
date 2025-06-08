<x-master title="Achats"> 
    @include('partials.errors')
    <center>
    <Fieldset class="fieldset">
    <h3>Modifier Achat</h3>
    <form method="post" action="{{ route('achats.update',$achat->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="formcu">            							
    
    <div ><label >Fournisseur : </label> 
        <select id="input" type="texte" name="fournisseur_id"  value="{{old('fournisseur_id',$achat->fournisseur_id)}}"  >
            <option value="">Sélectionnez un fournisseur</option>
            @foreach ($fournisseurs as $fournisseur)
             <option value="{{$fournisseur->id}}" @if ($fournisseur->id == old('fournisseur_id', $achat->fournisseur_id)) selected @endif>{{$fournisseur->nom}}</option>
            @endforeach </select> </div> 
   
            <div ><label >Composant : </label> 
                <select id="input" type="texte" name="composant_id"  value="{{old('composant_id',$achat->composant_id)}}"  >
                    <option value="">Sélectionnez un fournisseur</option>
                    @foreach ($composants as $composant)
                     <option value="{{$composant->id}}" @if ($composant->id == old('composant_id', $achat->composant_id)) selected @endif>{{$composant->name}}</option>
                    @endforeach </select> </div> 
           
    <div><label  >Quantite : </label>
    <input type="number" name="quantite"  value="{{old('quantite',$achat->quantite)}}" /></div>
       <div > <label  >Date : </label>
    <input type="date" name="date"  value="{{old('date',$achat->date)}}" /> </div>
    <input class="prix" type="number" name="prix"  value="{{old('prix',$achat->prix)}}" />

    <div ><button type="submit" class="btn "> Modifier</button></div>

    </div>
    </form>
    </Fieldset>
    </x-master>