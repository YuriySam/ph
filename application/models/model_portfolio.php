<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ua',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü".'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://ZopoMobile.ua',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://GeekWear.ua',
				'Description' => 'Интернет-магазин брендовой одежды для гиков.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://РоналВарвар.ua',
				'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. '
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TompsonTatoo.ua',
				'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Бучи.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://DaftState.ua',
				'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TiltPeople.ua',
				'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://AbsurdGames.ua',
				'Description' => 'Страничка  команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
			),

		);
	}

}
