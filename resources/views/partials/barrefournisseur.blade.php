
<div class="search">
<form action="/searchf" method="GET" role="search" enctype="multipart/form-data">
   @csrf
    <select class="option" name="category">
        <option value="nom">Nom</option>							
        <option value="prenom">Prenom</option>
        <option value="email">Email</option>
        <option value="tele">Telephone</option>
        <option value="adresse">Adresse</option>

    </select>
    <input class="input3" type="text" class="form-control" placeholder="Rechercher..." name="q">
    <input  class="input1" type="image" src="{{asset('images\barre2-Photoroom.jpg')}}" alt="Rechercher">
</form>
</div>