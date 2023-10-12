<?php

if (isset($_POST)) {
    $users = json_decode(file_get_contents('../database/books.json'), true);

    $new = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'available' => $_POST['available'],
        'pages' => $_POST['total_page'],
        'isbn' => $_POST['isbn'],
    ];
    
    $users[] = $new;

    file_put_contents('../database/books.json', json_encode($users));

    header('Location: index.php');
}