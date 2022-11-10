<!DOCTYPE html>
<html lang="en">
<head>
   notes
</head>
<body>
    <h2>Globals</h2>
    <p>PHP provides default super globals to access or store the data </p>
    <p>Super Globals Start with " $_" excepts $GLOBALS and it must written with cap let. only</p>
    
    
    <h2>Informatic</h2>
    <ul>
        <li>$_ENV</li>
        <li>$_SERVER</li>
        <p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</p>
        <?php
            echo "<pre>";

                //$_ENV = getenv();
                //$data = getenv();
                //print_r($_ENV);
                //print_r($_SERVER);
                // var_dump($_SERVER);
                // var_export($_SERVER);
        ?>
    </ul>
    <h2>Access Data</h2>
    <ul>
        <li>$_GET</li>
        <li>$_POST</li>
        <li>$_REQUEST</li>
        <li>$_FILES</li>
        <li>$GLOBALS</li>
    </ul>
    <h2>Storage</h2>
    <ul>
        <li>$_SESSION</li>
        <li>$_COOKIE</li>
    </ul>
</body>
</html>