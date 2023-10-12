<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration From</title>
    <link rel="stylesheet" type="text/css" href="/style/book_registration_form.css">
</head>
<body>
    <div class="registration-form">
        <h1>Book Registration Form</h1>
        <form action="book_add_process.php" method="post">
            <input type="text" name="isbn" placeholder="ISBN">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="author" placeholder="Author">
            <input type="text" name="available" placeholder="Available">
            <input type="text" name="total_page" placeholder="Total Page">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>