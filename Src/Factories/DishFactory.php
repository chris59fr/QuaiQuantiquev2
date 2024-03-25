<?php
/**
 * ici la méthode de création
 */

use Src\Models\Dish;

interface DishFactory
{
  public function createDish(): Dish;
}