<?php
    session_start();
    include "databaseConnection.php";
    $stopLogin = false;
    $sql = "SELECT user_name, password FROM users";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            if($row["user_name"]==$_POST["user_name"] && $row["password"]==$_POST["password"] ){
                $stopLogin = true;
            }
        }
        if ($stopLogin==false) {
            
            ?><script type="text/javascript">
            alert('Incorrect username or password');
            location.replace("login.html");
            </script>
            <?php
            
            
        }
        else {
            session_start();
            header('Location: blog.php');
        }
    }
?>