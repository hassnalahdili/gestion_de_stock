
<x-master title="Achats"> 
     @include('partials.errors')
    <center>
    <Fieldset class="fieldset"><h3>Ajouter Achat</h3>
    <form method="post" action="{{ route('achats.store')}}" enctype="multipart/form-data">
     @csrf
    <div class="formcu">
   
    <div ><label for="fournisseur_id">Fournisseur : </label> 
     <select id="input" type="option" name="fournisseur_id"   value="{{old('fournisseur_id')}}" >
    <option value="">Sélectionnez un fournisseur</option>
    @foreach ($fournisseurs as $fournisseur)
     <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
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