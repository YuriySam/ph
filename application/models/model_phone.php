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

}
