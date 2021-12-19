<?php

class Pokemon extends CoreModel
{
  private $name;
  private $image;
  private $pv;
  private $attaque;
  private $defense;
  private $attaqueSpe;
  private $defenseSpe;
  private $vitesse;
  private $number;
  
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
  public function getNumber()
  {
    return $this->number;
  }

  /**
   * Set the value of number
   *
   * @return  self
   */ 
  public function setNumber($number)
  {
    $this->number = $number;

    return $this;
  }
}