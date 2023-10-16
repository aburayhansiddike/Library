<?php

if (isset($_POST)) {
    $books = json_decode(file_get_contents('../database/books.json'), true);

    $new = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'available' => $_POST['available'],
        'pages' => $_POST['total_page'],
        'isbn' => $_POST['isbn'],
    ];

    $books[] = $new;

    file_put_contents('../database/books.json', json_encode($books));

    header('Location: index.php');
}