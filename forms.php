<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
 <h1>Hemanta Bikram Singh C7227265</h1> 
 </header>
 
 <section id="container">
 <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using GET</h2>
    <form method="POST" action="">
        <fieldset>
            <legend>Login</legend>
                <label for="email">Email: </label>
                <input type="text" name="txtEmail" value="<?php
                    if(isset($_POST['txtEmail'])){
                        echo $_POST['txtEmail']; 
                        }
                    ?>" /><br />
                <label for="passwd">Password: </label>
                <input type="password" name="txtPass" /><br /><br />
                <input type="submit" value="Submit" name="loginSubmit" />
                <input type="reset" value="Clear" />
        </fieldset>
     
    </form>
 
 <?php

    if(isset($_POST['loginSubmit'])){
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPass'];
        echo "Email: $email Password: $password";
    }
    else{
        
    }
?>
<br/><br/>
<form method="POST" action="">
    <fieldset>
        <legend>Comments</legend>
        <label for="">Email: </label>

        <select name="gender" id="pet-select">
            <option value="Mail">Spider</option>
            <option value="Female">Goldfish</option>
        </select>


        <input type="text" name="commentEmail" value="<?php
                    if(isset($_POST['commentEmail'])){
                        echo $_POST['commentEmail']; 
                        }
                    ?>" /><br /><br/>



        <textarea rows="4" cols="50" name="commentText" ><?php
            if(isset($_POST['commentText'])){
               echo $_POST['commentText']; 
            }?></textarea><br />



        <label for="">Click to Confirm: </label>
        <input type="checkbox" name="chkConfirm" value="agree"><br />
        <input type="submit" value="Submit" name="submitComment"/>
        <input type="reset" value="Clear" />
    </fieldset>
</form>

<?php
    if(isset($_POST['submitComment'])){
        if(!empty($_POST['commentEmail'])){
            $email = $_POST['commentEmail'];
            $text = $_POST['commentText'];
        
            if(isset($_POST['chkConfirm'])){
                $confirm = 'Agreed';
            }
            else{
              $confirm = 'Not Agreed';
            }

            echo "Email: $email";
            echo "<br/>";
            echo "Comments: $text";
            echo "<br/>";
            echo "Confirm: $confirm";
        }
        else{
            echo "Email must not be empty";
        }

        


    }
?>


<h1>Passing Data Appended to an URL</h1>
<h2>Pick a category</h2>
<a href="forms.php?cat=Films">Films</a>
<a href=" forms.php?cat=Books">Books</a>
<a href=" forms.php?cat=Music">Music</a>

<?php
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
        echo "The catagory chosen is $cat";
    }
?>




 </section>
 <footer> 
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>
