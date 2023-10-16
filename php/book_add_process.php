<?php

require_once 'models/Book.php';

if (isset($_POST)) {
    $book = new Book($_POST['isbn'], $_POST['title'], $_POST['author'], $_POST['available']);

    $book->save();

    header('Location: index.php');
}