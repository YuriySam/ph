<!--<h3>Телефоний довідник</h3>-->
<ul class="list">
<?php

	foreach($data_sidebar as $row)
	{
		?>
		<li> <a href="/<?php echo $row['namefile']?>"><?php echo $row['name']?></a></li>
		<?php
		
	}
	
?>



						
<!--

							<li class="first "><a href="/">Главная</a></li>
							<li> <a href="/services">Услуги</a></li>
							<li> <a href="/portfolio">Портфолио</a></li>
							<li class="last"><a href="/contacts">Контакты</a></li>
	-->						
							
</ul>
