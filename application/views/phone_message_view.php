<h1>Телефонний довідник</h1>
<p>
<table >

<tr>
	<td>
		<STRONG>
			№
		</STRONG>	
	</td>
	<td>
		<STRONG>
			Дата
		</STRONG>	
	</td>
	<td>
		<STRONG>
			Адреса
		</STRONG>	
	</td>
	<td>
		<STRONG>
			Текст
		</STRONG>	
	</td>
</tr>
<?php

	foreach($data as $row)
	{
		echo '
		<tr>
			<td>'.
				$row['id'].'
			</td>
			<td>'.
				$row['date'].'
			</td>
			<td>'.
				$row['host'].'
			</td>
			<td>'.
				$row['message'].'
			</td>
			
			
		</tr>';
	}
	
?>
</table>
</p>
