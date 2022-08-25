<h1>Телефоний довідник</h1>
<p>
<table>

<tr>
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
