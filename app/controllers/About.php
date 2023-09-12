<?php 

namespace App\controllers;
use App\core\Controller;
class About extends Controller
{

    public function index()
    {
        $this->view->render('about.php', 'template.php');
    }
}