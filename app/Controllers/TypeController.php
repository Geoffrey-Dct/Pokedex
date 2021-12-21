<?php

class TypeController extends CoreController {

  public function read($param) {
    $typeId = $param['id'];
    $typeModel = new Type;
    $Pokemons = $typeModel->findPokemonByType($typeId);
    $viewVars = [
      'pokemons' => $Pokemons,
    ];
    $this->show('type', $viewVars);
  }
}