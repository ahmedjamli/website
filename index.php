<?php ini_set('display_errors',1);?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Script Output</title>
    </head>
    
    <body>
    <?php
           try
           {
                $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8','ahmed','ahmed55Ty$');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                $output = 'Database connection established.';
           } 
           catch (PDOException $e)
           {
                $output = 'Unable to connect to the database server.'.$e->getMessage(). ' in '.$e->getFile() . ' ; ' . $e->getLine();
           }
        ?>
        <?php  echo $output;?>
        
        
    </body>

</html>