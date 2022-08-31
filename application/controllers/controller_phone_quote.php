<?php

class Controller_Phone_quote extends Controller
{

	function __construct()
	{
		$this->model = new Model_Phone();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data_quote();		
		$this->view->generate('phone_quote_view.php', 'template_view.php', $data, $data_sidebar);
	}
}
