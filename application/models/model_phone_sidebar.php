<?php
/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

class Model_Phone_Sidebar extends Model
{
	
	
	public function get_data()
	{	
		
		// Здесь просто реальные данные.
		
		return array(
			
			array(
				'name' => 'Іменинники',
				'namefile' => 'portfolio',
				'Description' => 'Знайти в кого сьогодні, чи найближчі 10 днів день народження.'
				'level' => '1'
			),

			array(
				'name' => 'Подивитись повідомлення',
				'namefile' => 'portfolio',
				'Description' => 'Дивимось повідомлення для Адміністратора.'
				'level' => '1'
			),

			array(
				'name' => 'Користувачі',
				'namefile' => 'portfolio',
				'Description' => 'Робота з користувачами додатку.'
				'level' => '1'
			),

			array(
				'name' => 'Пошук	',
				'namefile' => 'portfolio',
				'Description' => 'Шукати в будь-якому полі Довідника.'
				'level' => '3'
			),

			array(
				'name' => 'Оновити запис',
				'namefile' => 'portfolio',
				'Description' => 'Змінити запис довідника.'
				'level' => '2'
			),

			array(
				'name' => 'Оновити цитати',
				'namefile' => 'portfolio',
				'Description' => 'Оновити, додати, вилалити цитати.'
				'level' => '2'
			),

			array(
				'name' => 'Завантажити файли',
				'namefile' => 'portfolio',
				'Description' => 'Операції імпорту-експорту даних.'
				'level' => '2'
			),

			array(
				'name' => 'Допомога',
				'namefile' => 'portfolio',
				'Description' => 'Інструкція по роботі та запит Адміністратору.'
				'level' => '3'
			),

		);
		
	}

}
