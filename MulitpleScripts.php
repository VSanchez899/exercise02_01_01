<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="modernizer.custom.65897.js"></script>
</head>
<body>
    <h1>Php enviroment Info</h1>
    <p>The PHP was rendered with PHP version 
        <?php 
        // this presents the version information of the php version additionally some information about what is hosting the PHP
            echo phpversion();
        ?>
    </p>
    <p>The PhP code was rendered with zend Engine version
    
        <?php
        //this presents the zend version that is in use
            echo zend_version();
        ?>
    </p>
    <p>PHP's default MIME type is</p>
    <?php
    // this tells us the type of the php for the document
        echo ini_get("default_mimetype")
    ?>
    <p>The maximum allowable time of a PHP script is</p>
    <?php
    // this tells us how long it will aloow the php script to execute
        echo ini_get("max_execution_time")
    ?>
</body>
</html>