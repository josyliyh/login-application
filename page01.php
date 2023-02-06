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
        <h1>Page 01</h1>
    </header>
    <nav>
        <ul>
            <li><a href="page01.php">Page01</a></li>
            <li><a href="page02.php">Page02</a></li>
            <li><a href="page03.php">Page03</a></li>
            
        </ul>
    </nav>
    <main>             
    <section>

    <?php

    require_once("security.php");

    ?>
    <p><a href="logout.php">Logout</a></p>
    </section>        
    <section>
    		<?php

        require("dbinfo.php");


        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


        if( mysqli_connect_errno() != 0 ){
        die("<p>Could not connect to DB: ".$mysqli->connect_error."</p>");	
        }

            $query = "SELECT id, firstname, lastname FROM students ORDER BY lastname;";
            $result = $mysqli->query( $query );

            $numberOfRecordsInResult = $result->num_rows;
            echo "<p>There are ".$numberOfRecordsInResult ." registered student(s):</p>";

            echo "<table>";

            $arrayOfFieldNames =  $result->fetch_fields();	
        echo "<tr>";
        foreach($arrayOfFieldNames  as $oneFieldAsAnObject){	 

            echo "<th>" . $oneFieldAsAnObject->name . "</th>";		 
        }
        echo "</tr>";

        while( $oneRecord = $result->fetch_row() ){
            echo "<tr>";
            foreach($oneRecord as $field){
                echo "<td>" .$field . "</td>"; 
            }
            echo "</tr>";	
        }
        echo "</table>";

        $mysqli -> close();

            ?>

    </section>
    </main>
    <footer>
        <p>Copyleft 20** <span>&copy;</span> - PHP FWD Web Scripting 2</p>
    </footer>
</div>    
</body>
</html>