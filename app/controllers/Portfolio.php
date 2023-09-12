<?php 

namespace App\controllers;
use App\core\Controller;
use App\models\Model_Portfolio;

class Portfolio extends Controller
{
    function __construct()
	{
        parent::__construct();
		$this->model = new Model_Portfolio();
	}
    public function index()
    {
        $data = $this->model->get_data();
        $this->view->render('portfolio.php', 'template.php', $data);
    }
}