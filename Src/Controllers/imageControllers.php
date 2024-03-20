<?php


namespace Src\Controllers;

use Src\Repository\ImgTest;

class ImageController
{
    private $imgRepo;

    public function __construct()
    {
        $this->imgRepo = new ImgTest;
    }

    public function showAllId()
    {
        $ids = $this->imgRepo->selectAllId();

        return $ids;
    }
}
