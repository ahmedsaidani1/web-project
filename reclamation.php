<?php
include_once "../config.php";


class reclamation
{
    private $id;
    private $name;
    private $object;
    private $message;

    function __construct($name, $object, $message)
    {
      $this->name= $name;
      $this->object= $object;
      $this->message= $message;
      
    }

  // Les Getters
  function getId(){
    return $this->id;
  } 
  function getName(){
    return $this->name;
}
  function getObject(){
    return $this->object;
}
  function getMessage(){
      return $this->message;
  }
  // Les Setters
  function setName($name){
    $this->name= $name;
}
function setObject($object){
  $this->object= $object;
}
  function setMessage($message){
      $this->message= $message;
  }
  
}
?>
