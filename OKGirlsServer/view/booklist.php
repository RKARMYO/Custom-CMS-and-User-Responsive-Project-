<html>
<head>
	<title>index</title>
</head>

<body>

<table>
	<tr><td>Id</td><td>Name</td></tr>
	<?php 

		foreach ($allPersons as $data)
		{
			echo '<tr><td><a href="index.php?name='.$data['id'].'">'.$data['id'].'</a></td><td>'.$data['name'].'</td></tr>';
		}

	?>
</table>
	
</body>
</html>