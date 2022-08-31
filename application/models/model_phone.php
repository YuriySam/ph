<?php
/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

class Model_Phone extends Model
{
	
	//формування загального списку співробітників Телефонного довідника
	public function get_data()
	{	
		include_once('model_baseSQL.inc');
		$ender;
		
		$sql = "SELECT id, number, number1, func,  office, branch, branindex, surname, name, patronymic, street, house, flat, note, userMail, sortindex
		FROM ophone, func, office, street, branch
		WHERE office.offid='21'
		AND street.strid = ophone.strid
		AND func.funid = ophone.funid
		AND branch.branid = ophone.branid
		AND (NOT trim(number1)='' OR NOT trim(number)='')
		ORDER BY  sortindex ";
		//ho $sql;
		$res = mysqli_query($link, $sql) or exit($la_151_2 ." ". $la_151_9);//"Похибка при виконанні запиту до БД. " "або база даних не має записів"
		
		if (mysqli_num_rows($res)) {
			while ($row = mysqli_fetch_assoc($res)) {
				
				$ender[]=['branch' 	=>	$row['branch'    	],
						'func'   	=>	$row['func'      	],
						'surname'	=>	$row['surname'   	],
						'name'		=>	$row['name'      	],
						'patronymic'=>	$row['patronymic'	],
						'number' 	=>	$row['number'    	],
						'number1'	=>	$row['number1'  	],
						'office'	=>	$row['office'		],	
						'street'	=>	$row['street'		], 
						'house'		=>	$row['house'		], 
						'flat'		=>	$row['flat'			],
						'userMail'	=>	$row['userMail'		],
						'note'		=>	$row['note'			]
				];
			}
			
		}
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return $ender;
		/*return array(
			
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://GeekWear.ru',
				'Description' => 'Интернет-магазин брендовой одежды для гиков.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://РоналВарвар.рф',
				'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TompsonTatoo.ru',
				'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://DaftState.ru',
				'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TiltPeople.ru',
				'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://AbsurdGames.ru',
				'Description' => 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
			),

		);
		*/
	}

//формування пунктів верхнього основного меню
public function get_data_menu()
	{	
		
		// Перелічимо пункти основного меню 
		return array(
			array(
				'name' => 'Головна	',
				'namefile' => '',
				'Description' => 'Головна сторінка сайту.',
				'level' => '9'
			),
			array(
				'name' => 'Телефонний довідник	',
				'namefile' => 'phone',
				'Description' => 'Шукати в будь-якому полі Довідника.',
				'level' => '4'
			),
			array(
				'name' => 'Розвозка',
				'namefile' => 'tg',
				'Description' => 'Програма розвозка.',
				'level' => '3'
			),

		);
	}
//формування пунктів бокового меню для Телефонного довідника
public function get_data_sidebar()
	{	
		
		// Перелічимо пункти меню Сайдбару Телефоного довідника.
		return array(
			array(
				'name' => 'Телефонний довідник	',
				'namefile' => 'phone',
				'Description' => 'Шукати в будь-якому полі Довідника.',
				'level' => '3'
			),
			array(
				'name' => 'Іменинники',
				'namefile' => 'phone/birthday',
				'Description' => 'Знайти в кого сьогодні, чи найближчі 10 днів день народження.',
				'level' => '1'
			),

			array(
				'name' => 'Подивитись повідомлення',
				'namefile' => 'phone/message',
				'Description' => 'Дивимось повідомлення для Адміністратора.',
				'level' => '1'
			),

			array(
				'name' => 'Користувачі',
				'namefile' => 'portfolio',
				'Description' => 'Робота з користувачами додатку.',
				'level' => '1'
			),

			array(
				'name' => 'Цитати',
				'namefile' => 'phone/quote',
				'Description' => 'Оновити, додати, вилалити цитати.',
				'level' => '2'
			),

			array(
				'name' => 'Імпорт-Експорт',
				'namefile' => 'portfolio',
				'Description' => 'Операції імпорту-експорту даних.',
				'level' => '2'
			),

			array(
				'name' => 'Про це',
				'namefile' => 'portfolio',
				'Description' => 'Інструкція по роботі та запит Адміністратору.',
				'level' => '3'
			),

		);
	}

//формування списка співробітників, в яких день народження найближчі 10 днів
public function get_data_birthday()
	{	
		include_once('model_baseSQL.inc');
		$ender;
		//дни рождения сотрудников сегодня и +7 дней от сегодня
		$sql_birthday7 = "SELECT *, CURDATE() as today, WEEKDAY(`birthday`) as day, DAYNAME(`birthday`) as dayname   
		FROM ophone, func, office, street, branch
		WHERE office.offid= ophone.offid
		AND street.strid = ophone.strid
		AND func.funid = ophone.funid
		AND branch.branid = ophone.branid
		AND TIMESTAMPDIFF(
			DAY, 
			DATE_ADD(`birthday`, INTERVAL YEAR(NOW())-YEAR(`birthday`) YEAR), 
			NOW()
		) BETWEEN -7 AND -1 ORDER BY MONTH(birthday), DAY(birthday)" ;
		$res_birthday7	 = mysqli_query($link, $sql_birthday7) or exit('Похибка виконання запиту до БД..'.$filename);
		while ($row = mysqli_fetch_assoc($res_birthday7)) {
			$ender[]=[
					'birthday' 		=>	date('d/m/Y ', strtotime($row['birthday'])),
					'birthday_old' 	=>	date('Y/m/d ')-$row['birthday'],
					'branch' 		=>	$row['branch'    	],
					'func'   		=>	$row['func'      	],
					'surname'		=>	$row['surname'   	],
					'name'			=>	$row['name'      	],
					'patronymic'	=>	$row['patronymic'	],
					'number' 		=>	$row['number'    	],
					'number1'		=>	$row['number1'  	],
					'office'		=>	$row['office'		],	
					'street'		=>	$row['street'		], 
					'house'			=>	$row['house'		], 
					'flat'			=>	$row['flat'			],
					'userMail'		=>	$row['userMail'		],
					'note'			=>	$row['note'			]
				];
				
		}		
		// Здесь мы просто сэмулируем реальные данные.	
		
		return $ender;		
	}

//формування списку quote
public function get_data_quote()
	{	
		include_once('model_baseSQL.inc');
		$ender;
		
		$sql = "SELECT * FROM quote ";
		//echo "<BR>".$sql;
		$res = mysqli_query($link, $sql) or exit(" 34"." ".$f.mysqli_error());

			
		if (mysqli_num_rows($res)) {
			while ($row = mysqli_fetch_assoc($res)) {
				
				$ender[]=['id' 	=>	$row['id'    	],
						'quote'	=>	$row['quote'   	]
				];
			}
			
		}
		
		return $ender;
	}

//формування списку message
public function get_data_message()
	{	
		include_once('model_baseSQL.inc');
		$ender;
		//define('NUM', 5); //кількість повідомлень на сторінці
		$sql = "SELECT * FROM message";
		//echo "<BR>".$sql;
		$res = mysqli_query($link, $sql) or exit($f." 248"." ".mysqli_error());
		if (mysqli_num_rows($res)) {
			while ($row = mysqli_fetch_assoc($res)) {
				
				$ender[]=['id'	 	=>	$row['id'    	],
						'date'		=>	$row['date'    	],
						'host'		=>  $row['host'     ],
						'message'   =>  $row['message' 	]
				];      
			}
			
		}
		
		return $ender;
		
	}			
		
/*			
		if (mysqli_num_rows($res)) {
			while ($row = mysqli_fetch_assoc($res)) {
				
				$ender[]=['id' 	=>	$row['id'    	],
						'quote'	=>	$row['quote'   	]
				];
			}
			
		}
		
		return $ender;
	}

*/


}