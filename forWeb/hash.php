<?php
namespace model;


class Hash 
{
  public $id;
  protected $hash;
  protected $database;

  function __construct($id, $password)
  {
    $this->id = $id;
    $this->hash = md5($password);
  }

  function hashing()
  {
    return $this->hash;
  }

  function verifyhash()
  {
    if (md5($this->password == $hash)){
      return true;
    }
    else
    {
      return false;
    }
  }
}

