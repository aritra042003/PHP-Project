<?php
$size=sizeof($_POST);
$records= $size/4;

for($i=1;$i<=$records;$i++){
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];

    $index2="title".$i;
    $title[$i]=$_POST[$index2];

    $index3="price".$i;
    $price[$i]=$_POST[$index3];

    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'brm_db');

for($i=1;$i<=$records;$i++)
{
$q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation</title>
</head>

<body>
    <h1> Book Record Management</h1>
    <p>
        <?php echo $size."Records Updated"?>
    </p>
   go back to home page <a href="Home.php">click here</a>
</body>
</html>