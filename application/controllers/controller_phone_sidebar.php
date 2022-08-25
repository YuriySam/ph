<?php

class Controller_Phone extends Controller
{

	function __construct()
	{
		$this->model = new Model_Phone();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('phone_view.php', 'template_view.php', $data, $data_sidebar);
	}
}
