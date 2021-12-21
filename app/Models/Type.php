<?php

class Type extends CoreModel {

  private $name;
  private $color;


  public function findAll() {
    $sql="SELECT * FROM `type`";
    $pdo= Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
    return $types;
  }

  public function findPokemonByType(int $id) {
    $sql="SELECT nom, numero, pokemon.id FROM pokemon 
    inner join pokemon_type on pokemon.numero = pokemon_numero
    inner join type on pokemon_type.type_id = type.id
    where type.id = $id";
    $pdo= Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pokemons = $pdoStatement->fetchAll();
    return $pokemons;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of color
   */ 
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   *
   * @return  self
   */ 
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }
}