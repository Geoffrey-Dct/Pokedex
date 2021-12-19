<?php

class Pokemon extends CoreModel
{
  private $nom;
  private $image;
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
     * Get the value of image
     */ 
    public function getImage()
    {
      return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
      $this->image = $image;

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
     * Get the value of attaqueSpe
     */ 
    public function getAttaqueSpe()
    {
      return $this->attaqueSpe;
    }

    /**
     * Set the value of attaqueSpe
     *
     * @return  self
     */ 
    public function setAttaqueSpe($attaqueSpe)
    {
      $this->attaqueSpe = $attaqueSpe;

      return $this;
    }

    /**
     * Get the value of defenseSpe
     */ 
    public function getDefenseSpe()
    {
      return $this->defenseSpe;
    }

    /**
     * Set the value of defenseSpe
     *
     * @return  self
     */ 
    public function setDefenseSpe($defenseSpe)
    {
      $this->defenseSpe = $defenseSpe;

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