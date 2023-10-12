<?php
    $json = file_get_contents('../database/books.json');
    $bookJson = json_decode($json, true) ;
    $index = $_POST['index'] - 1 ;
    print_r($bookJson);

    if($bookJson){
        unset($bookJson[$index]);
        $bookJson = json_encode($bookJson);
        file_put_contents('../database/books.json', $bookJson);
        header('Location: index.php');
    }
?>      