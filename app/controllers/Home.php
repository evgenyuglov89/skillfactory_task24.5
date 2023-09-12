<?php 

namespace App\controllers;
use App\core\Controller;
class Home extends Controller
{

    public function index()
    {
        $this->view->render('home.php', 'template.php');
    }
    
}