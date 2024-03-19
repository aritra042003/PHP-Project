<?php
$f = $_FILES['myfile'];
$username = $_POST['username'];
echo "hello $username\n";
echo "file name: {$f['name']}\n";
echo "file type: {$f['type']}\n";
echo "file size: {$f['size']}\n";
if (file_exists("photos/" . $f['name'])) {
    echo "{$f['name']} already exists\n";
} elseif ($f['type'] == "image/jpeg") {
    move_uploaded_file($f['tmp_name'], "photos/" . $f['name']);
    echo "File uploaded successfully\n";
} else {
    echo "File format is not valid, unable to upload\n";
}
?>
