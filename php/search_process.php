<?php
   $json = file_get_contents('../database/books.json');
   $bookJson = json_decode($json, true) ;
   $searchBookName = $_GET['searchBookName'];
   $bookIndex = -1 ;
   //echo count($bookJson) ;
   for($i = 0 ; $i < count($bookJson); $i++){
        if(stripos($bookJson[$i]['title'], $searchBookName) !== false){
                $bookIndex = $i ;
                break ;
        }
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
    <?php if($bookIndex != -1){ ?>
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
        <div class="table-row">
                 <div class="table-cell">
                    <p><?php echo $bookIndex + 1; ?></p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $bookJson[$bookIndex]['isbn']?> </p>
                 </div>
                 <div class="table-cell"
                     <p> <?= $bookJson[$bookIndex]['title'] ?> </p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $bookJson[$bookIndex]['author'] ?> </p>
                 </div>
                 <div class="table-cell">
                     <p> <?= $bookJson[$bookIndex]['available'] ?> </p>
                 </div>
        </div>
    <?php } ?>
    <?php if($bookIndex == -1){
          echo"Opss... no book found";
    }?>
</body>
</html>