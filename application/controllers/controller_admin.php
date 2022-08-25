<?php

/*
Contorller_Admin с индексным действием, в котором проверяется был ли пользователь ранее авторизован на сайте как администратор (если был, то отображается вид админки) и действием logout для разлогинивания.
*/

class Controller_Admin extends Controller
{
	
	function action_index()
	{
		session_start();
		
		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
			$this->view->generate('admin_view.php', 'template_view.php');
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
