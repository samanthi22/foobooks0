<?php

require('helpers.php');

$booksJson = file_get_contents('books.json');

$books = json_decode($booksJson, true);

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
} else {
	$keyword = '';
}

if(isset($_GET['caseSensitive'])) {
 	$caseSensitive = true;
 } else {
 	$caseSensitive = false;
 }

dump($caseSensitive);

$keyword = $_GET['keyword'];

if ($keyword != '') {
	foreach($books as $title => $book) {
		if ($title != $keyword) {
			unset($books[$title]);
		}
	}
}

#dump($books);

#dump($books['The Bell Jar']['author']);
