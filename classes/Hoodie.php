<?php
require_once 'Product.php';

class Hoodie extends Product
{
  public $fit;
  public $sleeves;

  public function __construct($_sleeves = 'Long')
  {
      $this->sleeves = $_sleeves;
    }

  public function getSleeves()
   {
   return $this->sleeves. ' sleeves';
   }

}

$flameHoodie = new Hoodie('Short');
$flameHoodie->fit= 'Oversize';
$flameHoodie->prezzo= 50;

 ?>
