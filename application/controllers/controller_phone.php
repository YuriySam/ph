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
		$data_menu = $this->model->get_data_menu();	
		$data_sidebar = $this->model->get_data_sidebar();	
		//print_r($data_sidebar);
		$this->view->generate(	'phone_view.php', 
								'template_view.php', 
								$data, 
								$data_sidebar, 
								'phone_sidebar_view.php',
								$data_menu,
								'phone_menu_view.php'
								);
	}
	
	//для відображення найближчі дні народження
	function  action_birthday()
	{
		$data = $this->model->get_data_birthday();		
		$data_menu = $this->model->get_data_menu();	
		$data_sidebar = $this->model->get_data_sidebar();	
//print_r($data);	
		$this->view->generate('phone_birthday_view.php', 
							'template_view.php', 
							$data, 
							$data_sidebar, 
							'phone_sidebar_view.php',
							$data_menu,
							'phone_menu_view.php'
							);
	}
	
	//для відображення quote
	function  action_quote()
	{
		$data = $this->model->get_data_quote();		
		$data_menu = $this->model->get_data_menu();	
		$data_sidebar = $this->model->get_data_sidebar();	
//print_r($data);
		$this->view->generate('phone_quote_view.php', 
							'template_view.php', 
							$data, 
							$data_sidebar, 
							'phone_sidebar_view.php',
							$data_menu,
							'phone_menu_view.php'
							);

}

//для відображення quote
	function  action_message()
	{
		$data = $this->model->get_data_message();		
		$data_menu = $this->model->get_data_menu();	
		$data_sidebar = $this->model->get_data_sidebar();	
//print_r($data);
		$this->view->generate('phone_message_view.php', 
							'template_view.php', 
							$data, 
							$data_sidebar, 
							'phone_sidebar_view.php',
							$data_menu,
							'phone_menu_view.php'
							);

	}

}
