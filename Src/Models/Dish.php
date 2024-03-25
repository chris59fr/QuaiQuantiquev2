<?php

/**
 * L'interface d'un plat
 */

namespace Src\Models;

interface Dish {

  public function getName(): string;
  public function getDescription(): string;
  public function getPrice(): float;

}