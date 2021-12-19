<?php

// Gestion de nos pages

class MainController extends CoreController
{
    // Page d'accueil
    public function home()
    {

        $pokemonModel= new Pokemon();
        $pokemons = $pokemonModel->findAllForHome();
        //dd($categories);
        $viewVars=[
            'Pokemons'=> $pokemons
        ];
        // On appelle la méthode qui affiche le template
        $this->show('home',$viewVars);
    }
 }