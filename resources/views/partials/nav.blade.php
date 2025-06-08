
   <div class="nav">  
    @auth
    <h2>  {{ auth()->user()->prenom }} {{ auth()->user()->nom }} |</h2>
    
  <div id="logout">
    <a   href="{{route('login.logout')}}"> Deconnection <img class="deconnexion" src="{{asset('images\icone de deconnexion5-Photoroom (1).png')}}"   alt="slogant" title="Deconnexion"  />    </a>
  </div>
  @endauth
        <div >
          <a href="{{route('homepage')}}">Accueil</a>
        </div>
        
            <div >
              <a href="{{route('users.index')}}">Employeurs </a>
             
          </div>
          <div >
            <a href="{{route('clients.index')}}">Clients</a> 
        </div>
        <div >
          <a href="{{route('fournisseurs.index')}}">Fournisseurs</a> 
      </div>
          <div >
            <a   href="{{route('composants.index')}}"> Composants</a>
        </div>
        <div >
          <a   href="{{route('categories.index')}}"> Catégories</a>
      </div>
      <div >
        <a   href="{{route('warehouses.index')}}">Entrepôts</a>
    </div>
        <div >
          <a   href="{{route('achats.index')}}"> Achats</a>
      </div>
      <div >
        <a   href="{{route('ventes.index')}}"> Ventes</a>
    </div>
       
   
 
  
  
</div>
