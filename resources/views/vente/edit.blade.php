<x-master title="Ventes"> 
    @include('partials.errors')
    <center>
    <Fieldset class="fieldset">
    <h3>Modifier Vente</h3>
    <form method="post" action="{{ route('ventes.update',$vente->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="formcu">            							
    
    <div ><label >Client : </label> 
        <select id="input" type="texte" name="client_id"  value="{{old('client_id',$vente->client_id)}}"  >
            <option value="">Sélectionnez un client</option>
            @foreach ($clients as $client)
             <option value="{{$client->id}}" @if ($client->id == old('client_id', $vente->client_id)) selected @endif>{{$client->nom}}</option>
            @endforeach </select> </div> 
   
            <div ><label >Composant : </label> 
                <select id="input" type="texte" name="composant_id"  value="{{old('composant_id',$vente->composant_id)}}"  >
                    <option value="">Sélectionnez un composant</option>
                    @foreach ($composants as $composant)
                     <option value="{{$composant->id}}" @if ($composant->id == old('composant_id', $vente->composant_id)) selected @endif>{{$composant->name}}</option>
                    @endforeach </select> </div> 
           
    <div><label  >Quantite : </label>
    <input type="number" name="quantite"  value="{{old('quantite',$vente->quantite)}}" /></div>
       
    <div > <label  >Date : </label>
    <input type="date" name="date"  value="{{old('date',$vente->date)}}" /> </div>
    <input class="prix"type="number" name="prix"  value="{{old('prix',$vente->prix)}}" />

    <div ><button type="submit" class="btn "> Modifier</button></div>

    </div>
    </form>
    </Fieldset>
    </x-master>