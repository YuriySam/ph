<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/

class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		
		//print_r ($routes);
		//print_r ($_SERVER);
		//echo $_SERVER['REQUEST_URI'];
		$start_position=2;//при расположении в корне сайта(1)
		if($start_position>1){
			if (!isset($_SESSION['location'])) {
				  $_SESSION['location'] = $_SERVER['REQUEST_URI'];
				  //echo "<BR> _SESSION['location']= ".$_SESSION['location'];
				  //echo "<BR> REQUEST_URI= ".$_SERVER['REQUEST_URI'];
				} 
			
		}
		// получаем имя контроллера
		if ( !empty($routes[$start_position]) )
		{	
			$controller_name = $routes[$start_position];
		}
		
		// получаем имя экшена
		if ( !empty($routes[$start_position+1]) )
		{
			$action_name = $routes[$start_position+1];
		}

//echo "(routes[1])controller_name=  ".$controller_name."<BR> (routes[2])action_name= ".$action_name; 
//echo "<BR> _SESSION['location']= 	". $_SESSION['location'];
		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		
		
		//echo " <br>";
		//echo "Model: $model_name <br>";
		//echo "Controller: $controller_name <br>";
		//echo "Action: $action_name <br>";
		

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
//echo 	"<BR> controller= ".$controller_name."<BR> action= ".$action."<BR>  HTTP_HOST= ".$_SERVER['HTTP_HOST'];	
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			
			$controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	
	}

static	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
