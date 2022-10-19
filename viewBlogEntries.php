<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Entries</title>
    <link rel="stylesheet" href="portfoliocss.css">
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <header>
        <hgroup>
            <h1 id="Title" a href="#header"> Mujahidul Islam </a></h1>
            <nav class="TopNavigationLinks">
                <ul>
                    <li class="NavigationText"> <a href="AboutMe.html"> About me &nbsp; &nbsp; </a></li>
                    <li class="NavigationText"><a href="experience.html"> Experience &nbsp; &nbsp; </a></li>
                    <li class="NavigationText"><a href="Skills.html"> Skills &nbsp; &nbsp; </a></li>
                    <li class="NavigationText"><a href="Education.html"> Education &nbsp; &nbsp; </a></li>
                    <li class="NavigationText"><a href="Projects.html">Projects &nbsp; &nbsp; </a></li>
                    <li class="NavigationText"><a href="login.html"> Blog &nbsp; &nbsp; </a></li>
                </ul>
            </nav>
        </hgroup>
    </header>

    <a href="AboutMe.html"><button type="button" class="LogoutButtonBlogEntries">Logout</button></a>

    <footer>Mujahidul Islam &copy; 2022</a>
    </footer>
</body>

</html>

<?php
include "databaseConnection.php";
$sql = "SELECT Date, Time, textContent, title FROM blogData";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { // Display blog content

  while ($row = $result->fetch_assoc()) {
      $title = $row["title"];
      $textContent = $row["textContent"];
      $Date = $row["Date"];
      $Time = $row["Time"];
      echo '<p id="blogTitleTextStyle">'.$title.'</p>
            <p id="textContentStyle">'.$textContent.'</p>
            <p id="dateStyle">'.$Date.'</p>
            <p id="timeStyle">'.$Time.'</p>
            <hr id="blogEntriesHr">';
    }
} 
else { // If no blog entries, redirect to login page
    header("Location: login.html");
}
?>