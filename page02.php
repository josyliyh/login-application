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
        <h1>Page 02</h1>
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
        

<h3>Massa dolor</h3>				
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
elit. Aenean commodo ligula eget dolor. Aenean massa 
<strong>strong</strong>. Cum sociis natoque penatibus 
et magnis dis parturient montes, nascetur ridiculus 
mus. Donec quam felis, ultricies nec, pellentesque 
eu, pretium quis, sem. <em>Nulla consequat massa</em> quis 
enim. Donec pede justo, fringilla vel, aliquet nec, 
vulputate eget, arcu. In enim justo, rhoncus ut, 
imperdiet a, venenatis vitae, justo. Nullam dictum 
felis eu pede <a class="external ext" href="#">hyper link</a> 
mollis pretium. Integer tincidunt. Cras dapibus. 
Vivamus elementum semper nisi.</p>

<img 	src="https://via.placeholder.com/100/777.png" 
		class="example_content_image"
		alt="placeholder image" />
		
<p>Aenean vulputate 
eleifend tellus. Aenean leo ligula, porttitor eu, 
consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
dapibus in, viverra quis, feugiat a, tellus. Phasellus 
viverra nulla ut metus varius laoreet. Quisque rutrum. 
Aenean imperdiet. Etiam ultricies nisi vel augue. 
Curabitur ullamcorper ultricies nisi. Integer tincidunt. Cras dapibus. 
Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Integer tincidunt. Cras dapibus. 
Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

<blockquote cite="https://www.opensourceshakespeare.org/views/plays/play_view.php?WorkID=othello&Act=5&Scene=2&Scope=scene">
    <p>I am one who loved not wisely but too well.</p>
    <footer>William Shakespeare, <cite>The Tragedy of Othello</cite></footer>
</blockquote>

    </section>
    </main>
    <footer>
        <p>Copyleft 20** <span>&copy;</span> - PHP FWD Web Scripting 2</p>
    </footer>
</div>    
</body>
</html>