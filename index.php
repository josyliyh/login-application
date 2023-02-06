<?php
        require_once("config.php");   
        $stylesheet = "css/blue.css";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment10</title>  
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="BCIT FWD Web Scripting 2: Using PHP and MySQL to develop server side solutions for web development.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/red.css">  
    <link rel="stylesheet" href="css/fonts.css">   
    
</head>
<body>
<div id="wrapper">
    <header>
        <h1>Login Application</h1>
    </header>
    <main>             
    <section>
        <?php
            //start or resume the session        
            session_start();
            //see if there are messages to display
            if(isset($_SESSION['messages'])){    
                echo "<ul>";
                foreach($_SESSION['messages'] as $message){
                    echo "<li>$message</li>";
                }
                echo "</ul>";

                //now that they'ev been displayed,
                //clear them from the session
                unset($_SESSION['messages']);
            }
        ?>
    <form action="process-login.php" method="post" style="max-width:500px;">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    
    <input type="submit" value="Submit">
        </form>
    </section>        
    </main>
    <footer>
        <p>Copyleft 20** <span>&copy;</span> - PHP FWD Web Scripting 2</p>
    </footer>
</div>    
</body>
</html>