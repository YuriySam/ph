<h1>Іменинники</h1>
<p>
<table >

<tr>
	<td>
		<STRONG>
			Народження
		</STRONG>	
	</td>
	<td>
		<STRONG>
			Вік
		</STRONG>	
	</td>
	<td>
		<STRONG>
			ВАТС
		</STRONG>	
	</td>
	<td>
		<STRONG>
			ПІБ
		</STRONG>	
	</td>
	<td>
		<STRONG>
			Посада
		</STRONG>	
	</td>
</tr>
<?php

	foreach($data as $row)
	{
		echo '
		<tr>
			<td>'.
				$row['birthday'].'
			</td>
			<td>'.
				$row['birthday_old'].'
			</td>
			<td>'.
				$row['number'].'
			</td>
			<td>'.
				$row['surname']." ".
				$row['name']." ".
				$row['patronymic'].'
			</td>
			<td>'.
				$row['func'].'
			</td>
		</tr>';
	}
	
?>
</table>
</p>
