<?php

class PokemonController extends CoreController
{
  public function read($param)
  {
    $pokemonId = $param['id'];
    $pokemonModel= new Pokemon();
    $pokemon = $pokemonModel->find($pokemonId);
    $pokemonTypes = $pokemonModel->findTypes($pokemonId);
    $viewVars=[
        'Pokemon'=> $pokemon,
        'PokemonTypes' => $pokemonTypes
    ];
    
    // On appelle la méthode qui affiche le template
    $this->show('pokemon',$viewVars);
  }
}