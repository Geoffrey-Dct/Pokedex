<?php

class PokemonController extends CoreController
{
  public function read($param)
  {
    $pokemonId = $param['id'];
    $pokemonModel= new Pokemon();
    $pokemon = $pokemonModel->find($pokemonId);
    $viewVars=[
        'Pokemon'=> $pokemon
    ];
    
    // On appelle la méthode qui affiche le template
    $this->show('pokemon',$viewVars);
  }
}