
<div class="search">
<form action="/searchc" method="GET" role="search" enctype="multipart/form-data">
   @csrf
    <select class="option" name="category">
        <option value="name">Name</option>							
        <option value="caregorie_id">Categorie</option>
        <option value="serial_number">Serial Number</option>
        <option value="quantite">Quantite</option>
        <option value="prix_achat">Prix d'Achat</option>
        <option value="prix_vente">Prix de Vente</option>
        <option value="date_achat">Date Achat</option>
        <option value="warehouse_id">Emplacement</option>
    </select>
    <input class="input3" type="text" class="form-control" placeholder="Rechercher..." name="q">
    <input  class="input1" type="image" src="{{asset('images\barre2-Photoroom.jpg')}}" alt="Rechercher">
</form>
</div>