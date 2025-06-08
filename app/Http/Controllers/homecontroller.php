<?php

namespace App\Http\Controllers;

use App\Models\achat;
use App\Models\client;
use App\Models\composant;
use App\Models\fournisseur;
use App\Models\user;
use App\Models\vente;

class homecontroller extends Controller
{public function __construct(){$this->middleware('auth');}
    public function index(){
      $users=user::count() ;
      $composants=composant::count();
      $clients=client::count();
      $fournisseurs=fournisseur::count();     
      $ventes=vente::count();
      $achats=achat::count();

     return view('home',compact('users','composants','clients','fournisseurs','ventes','achats'));
     }
     public function indexh(){
      $composants=composant::count();
      $clients=client::count();
      $fournisseurs=fournisseur::count();     
      $ventes=vente::count();
      $achats=achat::count();

     return view('home2',compact('composants','clients','fournisseurs','ventes','achats'));
     }
}
