
<x-master title="Ventes"> 
     @include('partials.errors')
    <center>
    <Fieldset class="fieldset"><h3>Ajouter Vente</h3>
    <form method="post" action="{{ route('ventes.store')}}" enctype="multipart/form-data">
     @csrf
    <div class="formcu">
   
    <div ><label for="client_id">Client : </label> 
     <select id="input" type="option" name="client_id"   value="{{old('client_id')}}" >
    <option value="">Sélectionnez un client</option>
    @foreach ($clients as $client)
     <option value="{{$client->id}}">{{$client->nom}}</option>
    @endforeach </select> </div>
    <div ><label for="composant_id">Composant : </label> 
      <select id="input" type="option" name="composant_id"   value="{{old('composant_id')}}" >
     <option value="">Sélectionnez un Composant</option>
     @foreach ($composants as $composant)
      <option value="{{$composant->id}}">{{$composant->name}}</option>
     @endforeach </select> </div>
   
    <div><label  >Quantite : </label>
         <input type="number" name="quantite"  value="{{old('quantite')}}" /></div>
  
   
     
     <div > <label  >Date  : </label>
        <input type="date" name="date"  value="{{old('date')}}" /> </div>
        <input class="prix" type="number" name="prix" value="{{0}}"/>
        <div > <button type="submit" class="btn "> Ajouter</button></div>

   </div></form>
    </Fieldset>
    </center>
    </x-master>