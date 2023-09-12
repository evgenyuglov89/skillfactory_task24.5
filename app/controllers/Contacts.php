<?php 

namespace App\controllers;
use App\core\Controller;
class Contacts extends Controller
{

    public function index()
    {
        $this->view->render('contacts.php', 'template.php');
    }
}