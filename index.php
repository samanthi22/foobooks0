<?php require('getAllBooks.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
	<meta charset='utf-8'>

</head>
<body>

<h1>Foobooks</h1>

<?php foreach ($books as $title => $book) : ?>
	<div class='book' style='border:1px solid black'>
	<h2><?=$title?></h2>
	<h3>Author: <?=$book['author']?></h3>
	<h3>Published year: <?=$book['published']?> </h3>
	</div>
<?php endforeach; ?>

</body>
</html>
