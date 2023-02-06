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
        <h1>Page 03</h1>
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
    //ensure the user is allwoed to remain on this page
    //eg: they must be logged in and not timed out
    require_once("security.php");

    ?>
    <p><a href="logout.php">Logout</a></p>
    </section>        
    <section>
        
<h3>Aenean commodo</h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
elit. Aenean commodo ligula eget dolor. Aenean massa. 
Cum sociis natoque penatibus et magnis dis parturient 
montes, nascetur ridiculus mus. Donec quam felis, 
ultricies nec, pellentesque eu, pretium quis, sem.</p>
<ol>
  <li>Lorem ipsum dolor sit amet consectetuer.</li>
  <li>Aenean commodo ligula eget dolor.</li>
  <li>Aenean massa cum sociis natoque penatibus.</li>
</ol>


<h3>Massa dolor</h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
elit. Aenean commodo ligula eget dolor. Aenean massa. 
Cum sociis natoque penatibus et magnis dis parturient 
montes, nascetur ridiculus mus. Donec quam felis, 
ultricies nec, pellentesque eu, pretium quis, sem.</p>
<table class="data">
  <tr>
	<th>Entry Header 1</th>
	<th>Entry Header 2</th>
	<th>Entry Header 3</th>
	<th>Entry Header 4</th>
  </tr>
  <tr>
	<td>Entry First Line 1</td>
	<td>Entry First Line 2</td>
	<td>Entry First Line 3</td>
	<td>Entry First Line 4</td>
  </tr>
  <tr>
	<td>Entry Line 1</td>
	<td>Entry Line 2</td>
	<td>Entry Line 3</td>
	<td>Entry Line 4</td>
  </tr>
  <tr>
	<td>Entry Last Line 1</td>
	<td>Entry Last Line 2</td>
	<td>Entry Last Line 3</td>
	<td>Entry Last Line 4</td>
  </tr>
</table>		

<h4>Massa dolor</h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
elit. Aenean commodo ligula eget dolor. Aenean massa. 
Cum sociis natoque penatibus et magnis dis parturient 
montes, nascetur ridiculus mus. Donec quam felis, 
ultricies nec, pellentesque eu, pretium quis, sem.</p>		
    </section>
    </main>
    <footer>
        <p>Copyleft 20** <span>&copy;</span> - PHP FWD Web Scripting 2</p>
    </footer>
</div>    
</body>
</html>