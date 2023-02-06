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
    
    <?php
    //resume session
    session_start();
    //load default stylesheet choice DEFAULT_STYLESHEET
    require_once("config.php");

    ?>
      
</head>
<body>
<div id="wrapper">
    <header>
        <h1>Logout</h1>
    </header>
    <main>             
    <section>
    <?php


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

if( isset($_SESSION['time-logged-in']) &&
    isset($_SESSION['username']) &&
    isset($_SESSION['stylesheet'])   ){
    $now = time();
    $durationLoggedIn = $now - $_SESSION['time-logged-in'];
    echo "<p>You were logged in for $durationLoggedIn seconds. Thanks for your time, ".$_SESSION['username']."!</p>";

    
    //if they have a stylesheet preference, we could save it in a cookie
    setcookie("stylesheet", $_SESSION['stylesheet'], time()+60*60*24*7);

}

//clear session variables
$_SESSION = array();
//end session
session_destroy();


        ?> 
        <p><a href="index.php">Login</a></p>
    </section>        
    </main>
    <footer>
        <p>Copyleft 20** <span>&copy;</span> - PHP FWD Web Scripting 2</p>
    </footer>
</div>    
</body>
</html>