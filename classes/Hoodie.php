<?php
require_once 'Product.php';

class Hoodie extends Product
{
  public $fit;
  public $sleeves;

  // public function __construct($_sleeves = 'Long')
  // {
  //     $this->sleeves = $_sleeves;
  //   }
  public function __construct($_prezzo, $_taglia, $_genere  = 'Unisex', $_sleeves = 'Long')
  {
  parent::__construct($_prezzo, $_taglia, $_genere);
  $this->sleeves = $_sleeves;
  }

  public function getSleeves()
   {
   return $this->sleeves. ' sleeves';
   }

}


$flameHoodie = new Hoodie(50, 'L');
$flameHoodie->fit= 'Oversize';

 ?>
