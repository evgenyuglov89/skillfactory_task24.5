<h1>Портфолио</h1>
<p>
<table class="table table-bordered">
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><th scope="col">Год</th><th scope="col">Проект</th><th  scope="col">Описание</th></tr>
<?php

	foreach($payload as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>