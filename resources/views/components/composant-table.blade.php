<fieldset class="fieldset2">
    <img class="imgshow" src="{{ asset('storage/'.$composant->image)}}" alt="Title" width="200px" height="200px"><br>
    @include('partials.composantSM')
    <div class="show">
   <table class="tab">
       <tr><td>Name :</td>   <td>{{$composant->name}}</td></tr>
       <tr><td>Categorie :</td>   <td>{{$composant->categorie->nom}}</td></tr>
       <tr><td>Serial Number :</td>   <td>{{$composant->serial_number}}</td></tr>
       <tr><td>Quantite :</td>   <td>{{$composant->quantite}}</td></tr>
       <tr><td>Prix d'Achat :</td>   <td>{{$composant->prix_achat}}</td></tr>
       <tr><td>Prix de Vente :</td>   <td>{{$composant->prix_vente}}</td></tr>
       <tr><td>Date Achat :</td>   <td>{{$composant->date_achat}}</td></tr>
       <tr><td>Emplacement :</td>   <td>{{$composant->warehouse->name}}</td></tr>
   </table>      
           
   </div>               
   </fieldset> <br>