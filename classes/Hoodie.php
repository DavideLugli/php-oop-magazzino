<?php
require_once 'Product.php';
require_once __DIR__ . '/../traits/GetMaterial.php';

class Hoodie extends Product
{
  use GetMaterial;
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
$flameHoodie->tessuto= 'Cotone';

 ?>
