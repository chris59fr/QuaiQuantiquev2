<?php

namespace Src\Controllers;


use Src\Models\MenuModel;
use Src\Repository\MenuRepository;

class MenuController 
{
  private MenuRepository $menuRepository;

  public function __construct() {
    $this->menuRepository = new MenuRepository;
  }

  public function showMenu() {
    $menus = $this->menuRepository->getAll();

    return $menus;
    include('Home.php');
    
  }

}