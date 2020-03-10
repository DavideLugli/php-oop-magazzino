<?php

trait GetMaterial
{
  public $tessuto;

  public function getMaterial() {
  return 'Materiale: '. $this->tessuto;
  }

}
