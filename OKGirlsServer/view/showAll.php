<html>
<head>
	<title>showAll</title>
	<style type="text/css">
		.edit
		{
			color: red;
		}
		.edit:hover
		{
			cursor: pointer;
		}
	</style>
	
</head>

<body>

<table border="1">
	<tr><td>Id</td><td>Name</td><td>Phone</td><td>Address</td><td></td></tr>
	<?php 

		foreach ($showAll as $data)
		{
			echo '<tr><td>'.$data['id'].'</td><td>'.$data['name'].'</td><td>'.$data['phone'].'</td><td>'.$data['address'].'</td><td><a href="index.php?edit='.$data['id'].'"><span class="edit">edit</span></a></td></tr>';
		}

	?>
</table>

</body>
</html>