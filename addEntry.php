<?php
session_start();
include "databaseConnection.php";

if (isset($_POST['title']) && isset($_POST['textContent'])){
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$title = validate($_POST['title']);
$textContent = validate($_POST['textContent']);

$sql = "INSERT INTO blogData(title, textContent, date, time) VALUES ('$title', '$textContent', CURDATE(), NOW())";

$result = mysqli_query($conn, $sql);

echo "Blog added";
header("Location: viewBlogEntries.php");
exit();

?>