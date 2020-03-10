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
  public function __construct($_sleeves = 'Long')
  {
  parent::__construct($_prezzo, $_taglia, $_genere);
  $this->sleeves = $_sleeves;
  }

  public function getSleeves()
   {
   return $this->sleeves. ' sleeves';
   }

}

$flameHoodie = new Hoodie('Short', 50, 'L', 'Man');
// $flameHoodie->prezzo = 50;
// $flameHoodie->taglia = 'L';
// $flameHoodie->genere = 'Man';
$flameHoodie->fit= 'Oversize';

 ?>
