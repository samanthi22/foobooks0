<?php require('getAllBooks.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="books.css">

</head>
<body>

<h1>Foobooks</h1>

<form method='GET' action='/'>

<label for='keyword'>Filter by keyword</label>
<input type='text' name='keyword' id='keyword' value='<?=sanitize($keyword)?>'><br>


<input type='checkbox' name='caseSensitive' id='caseSensitive'>
<label for='caseSensitive'>Case sensitive</label><br>


<input type='submit' class='btn btn-primary btn-small' value='Filter books'>
</form>

<?php if(count($books) == 0) : ?>
	<div class='alert alert-warning'>Your keyword did not match any results</div>
<?php elseif($keyword != '') : ?>
	<div class='alert alert-info'>You searched for: <strong><?=sanitize($keyword)?></strong></div>
<?php endif; ?>

<?php foreach ($books as $title => $book) : ?>
	<div class='book' style='border:1px solid black'>
	<h2><?=$title?></h2>
	<h3>Author: <?=$book['author']?></h3>
	<h3>Published year: <?=$book['published']?> </h3>
	</div>
<?php endforeach; ?>

</body>
</html>
