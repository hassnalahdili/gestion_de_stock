
<div class="search">
    <form action="/search" method="GET" role="search" enctype="multipart/form-data">
        @csrf
    <select class="option" name="category">
        <option value="nom">Nom</option>
        <option value="prenom">Prénom</option>
        <option value="email">E-mail</option>
        <option value="tele">Telephone</option>
        <option value="adresse">Adresse</option>
        <option value="session_id">Rôle</option>
      
    </select>
    <input class="input3" type="text"  placeholder="Rechercher..." name="q">
    <input  class="input1" type="image" src="{{asset('images\barre2-Photoroom.jpg')}}" alt="Rechercher">
</form>
</div>