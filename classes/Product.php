<!-- // negozio di abbigliamento -->
<?php
require_once __DIR__ . '/../traits/GetMaterial.php';

class Product {
use GetMaterial;
public $prezzo;
public $taglia;
public $colore;
public $genere;
public $stagione;

public function __construct($_prezzo, $_taglia, $_genere = 'Unisex')
{
  if (!is_int($_prezzo)) {
    die('non è un prezzo');
    }
    $this->prezzo = $_prezzo;
    $this->taglia = $_taglia;
    $this->genere = $_genere;
  }

  public function getPrice() {
    if (!is_int($this->prezzo)) {
      die('non è un prezzo');
      }
    return $this->prezzo. ' euro';
  }
}

$bomber = new Product(80, 'L', 'Woman');
$bomber->colore = 'Pink';
$bomber->stagione = 'Fall';

$pullover = new Product(35, 'M', 'Man');
$pullover->colore = 'Blue';
$pullover->stagione = 'Spring';

 ?>
