<h1>Телефонний довідник</h1>

<script>
function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}
</script>
<input class="form-control" type="text" placeholder="Пошук" id="search-text" onkeyup="tableSearch()">


<p>
<table id="info-table">

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
