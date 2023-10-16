
<?php
    $books = '' ;
    $filename = '../database/books.json';
    if(file_exists($filename)){

        $data = file_get_contents($filename);
        $books = json_decode($data);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/style/dashboard.css">
</head>
<body>
      <div class="wrapper">
            <div class="main">
                 <form action="search_process.php" method="get">
                   <input type="text" name="searchBookName" placeholder="Type to search">
                   <button class="search-button" type="submit" ><i class="fa fa-search icon-search"></i></button>
                 </form>
            </div>
            <div>
                  <button  class="btn add-button" onclick="window.location = 'book_registration_form.php'"><i class="fa fa-plus"></i> add</button>
            </div>
            <div>
                  <button class="btn delete-button" onclick="window.location = 'delete_form.php'"><i class="fa fa-trash-o"></i> delete</button>
            </div>
      </div>

            <div class="table-box">
                <div class="table-row table-head">
                     <div class="table-cell">
                        <p>Index</p>
                     </div>
                     <div class="table-cell">
                        <p>ISBN</p>
                     </div>
                     <div class="table-cell">
                        <p>Book Name</p>
                     </div>
                     <div class="table-cell">
                        <p>Author</p>
                     </div>
                     <div class="table-cell">
                        <p>Stock</p>
                     </div>
                </div>
            </div>

            <?php $index = 1 ;
            ?>

            <?php foreach($books as $user): ?>
            <div class="table-row">
                 <div class="table-cell">
                    <p><?php echo $index; ?></p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $user->isbn ?> </p>
                 </div>
                 <div class="table-cell"
                     <p> <?= $user->title ?> </p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $user->author ?> </p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $user->available ?> </p>
                 </div>
            </div>
            <?php $index++ ?>
            <?php endforeach ?>
</body>
</html>