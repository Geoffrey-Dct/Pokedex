<?php

class Pokemon extends CoreModel
{
  private $nom;
  private $pv;
  private $attaque;
  private $defense;
  private $attaque_spe;
  private $defense_spe;
  private $vitesse;
  private $numero;

    /**
     * Get one pokemon by its id
     * 
     * @param int $id Pokemon Primary key
     * @return Pokemon Pokemon found
     */
    public function find(int $id): Pokemon
    {
        // requète pour un produit
        $sql = "SELECT * FROM pokemon WHERE id={$id}";


        // On récupère la connexion à PDO
        $pdo = Database::getPDO();

        // On exécute la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère un objet de type Product
        $pokemon = $pdoStatement->fetchObject('Pokemon');

        // On le renvoie
        return $pokemon;
    }
    
    /**
     * Get all pokemons
     */
    public function findAll()
    {
      // requète pour un produit
      $sql = "SELECT * FROM pokemon";


      // On récupère la connexion à PDO
      $pdo = Database::getPDO();

      // On exécute la requête
      $pdoStatement = $pdo->query($sql);

      // On récupère un objet de type Product
      $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');

      // On le renvoie
      return $pokemons;
  }

  public function findAllForHome()
  {
    $sql = "SELECT * FROM pokemon";
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pokemonsForHome = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');
    return $pokemonsForHome;
  }

  public function findTypes(int $id)
  {
    $sql = "SELECT type.id, name, color FROM `type` 
    INNER JOIN `pokemon_type` ON pokemon_type.type_id = type.id
    INNER JOIN `pokemon` ON pokemon.numero = pokemon_type.pokemon_numero
    WHERE pokemon.id = $id";
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pokemonDetails = $pdoStatement->fetchAll();
    return $pokemonDetails;
  }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
      return $this->nom;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
      $this->nom = $name;

      return $this;
    }
    


    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
      return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
      $this->pv = $pv;

      return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
      return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
      $this->attaque = $attaque;

      return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
      return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
      $this->defense = $defense;

      return $this;
    }

    
    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaque_spe()
    {
      return $this->attaque_spe;
    }
  
    /**
     * Set the value of attaque_spe
     *
     * @return  self
     */ 
    public function setAttaque_spe($attaque_spe)
    {
      $this->attaque_spe = $attaque_spe;
  
      return $this;
    }
    
    /**
     * Get the value of defense_spe
     */ 
    public function getDefense_spe()
    {
      return $this->defense_spe;
    }
  
    /**
     * Set the value of defense_spe
     *
     * @return  self
     */ 
    public function setDefense_spe($defense_spe)
    {
      $this->defense_spe = $defense_spe;
  
      return $this;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
      return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse($vitesse)
    {
      $this->vitesse = $vitesse;

      return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumero()
    {
      return $this->numero;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumero($number)
    {
      $this->numero = $number;

      return $this;
    }


}