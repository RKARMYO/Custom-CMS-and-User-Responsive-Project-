<html>
<head></head>

<body>

<?php 
	
	//example view
	// echo 'Title:' . $book->title . '<br/>';
	// echo 'Author:' . $book->author . '<br/>';
	// echo 'Description:' . $book->description . '<br/>';

	//my view
	echo "<table border='1'><tr><td>Title</td><td>$book->title</td></tr><tr><td>Author</td><td>$book->author</td></tr><tr><td>Description</td><td>$book->description</td></tr></table>";

?>

</body>
</html>