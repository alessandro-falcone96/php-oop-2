<?php 
  class Computer{
    public $name;
  }

  class Portatili extends Computer{
    public $type;
    public $price;
    public $discount;

    public function setType($_type){
      $this->type = $_type;
    }
    public function setPrice($_price){
      $this->price = $_price;
    }
    public function setDiscount($_discount){
      $this->discount = $this->price * $_discount / 100;
    }

    public function getType(){
      return $this->type;
    }
    public function getPrice(){
      return $this->price;
    }
    public function getDiscount(){
      return $this->discount;
    }
  }

  $macbook = new Computer();

  $macbookPro = new Portatili();
  $macbookPro-> setType("Macbook Pro");
  $macbookPro-> setPrice("2299");
  $macbookPro-> setDiscount("10");
  echo "Il tipo di Computer è: " . $macbookPro->getType() . ". ";
  echo "Il prezzo è: " . $macbookPro->getPrice() . "€. ";
  echo "Lo sconto è: " . $macbookPro->getDiscount() . "€";

  echo nl2br ("\n");

  $macbookAir = new Portatili();
  $macbookAir-> setType("Macbook Air");
  $macbookAir-> setPrice("1499");
  $macbookAir-> setDiscount("10");
  echo "Il tipo di Computer è: " . $macbookAir->getType() . ". ";
  echo "Il prezzo è: " . $macbookAir->getPrice() . "€. ";
  echo "Lo sconto è: " . $macbookAir->getDiscount() . "€";  