<?php
$title = $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'brm_db');
$q = "insert into book(title,price,author) values('$title',$price,'$author')";
$status = mysqli_query($con, $q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>

<body>
    <h1> Book Record Management</h1>
    <p>
        <?php
        if ($status == 1)
            echo "record inserted";
        else
            echo "insertion failed";
        ?>
    </p>
    do you want to insert more record <a href="insertForm.php">click here</a>
</body>
</html>