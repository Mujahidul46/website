<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
                    <li class="NavigationText"><a href="login.php"> Blog &nbsp; &nbsp; </a></li>
                </ul>
            </nav>
        </hgroup>
        <script>
                function checkIfFormEmpty(event) {
                    var title = document.getElementById("title").value;
                    var textfield = document.getElementById("EnterBlogTextHere").value;

                    if (title == "" && textfield == "") {
                        alert("Fill in title and blog text area.");
                        document.getElementById('title').style.borderColor = "red";
                        document.getElementById('EnterBlogTextHere').style.borderColor = "red";
                        event.preventDefault();
                        return false;
                    } else if (title == "") {
                        alert("Fill in title text.");
                        document.getElementById('title').style.borderColor = "red";
                        event.preventDefault();
                        return false;
                    } else if (textfield == "") {
                        alert("Fill in blog text.");
                        document.getElementById('EnterBlogTextHere').style.borderColor = "red";
                        event.preventDefault();
                        return false;
                    } else {
                        document.getElementById("Blog").submit();
                    }
                }

                function ConfirmDelete() {
                    var resetText = confirm("Are you sure you want to delete?");
                    if (resetText == true) {
                        return true;
                    }
                    else {
                        event.preventDefault();
                    }
                }
            </script>
    </header>
    
    <div class="BlogBox">
        <form action="addEntry.php" method="post" class="BlogEntryForm" id="Blog"> 
            <legend> Add Blog </legend>
            <input type="text" class="BlogTitle" placeholder="Title" name="title" id="title">
            <br>
            <br>
            <textarea name="textContent" placeholder="Enter your text here" required id="EnterBlogTextHere"></textarea>
            <button name="postButton" type="button" onclick="checkIfFormEmpty();" class="PostButton"> Post </button>
            <button onclick="ConfirmDelete();" type="reset" class="ClearButton"> Clear Text </button>
            <a href="AboutMe.html"><button type="button" class="LogoutButton">Logout</button></a>
        </form>
    </div>

    

    <footer>Mujahidul Islam &copy; 2022</a>
    </footer>
</body>

</html>