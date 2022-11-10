<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>$GLOBLE</h2>
        <p>Super global variables are built-in variables that are always available in all scopes.</p>
    <?php
    $x = 75;
    $y = 25;
     
    function addition() {
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
     
    addition();
    //echo $z;
    //z is a variable present within the $GLOBALS array, it is also accessible from outside the function!
    //100
    ?>
<h2>$_SERVER</h2>
        <p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</p>
        <?php
        //print_r($_SERVER);
        // var_dump($_SERVER);
        // var_export($_SERVER);
        //echo $_SERVER['HTTP_HOST'];
        ?>


<h2>$_REQUEST</h2>
<p>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", 
    the form data is sent to the file specified in the action attribute of the 'form' tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
    Then, we can use the super global variable $_REQUEST to collect the value of the input field</p>





<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    //echo "Name is empty";
  } else {
    //echo $name;
  }
}
?>

<h2>$_POST</h2>
<p> $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
     $_POST is also widely used to pass variables.</p>
    <p>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the 'form' tag. 
        In this example, we point to the file itself for processing form data.</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }

    ?>

<h2>$_GET</h2>
<p>PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".</p>

<p>$_GET can also collect data sent in the URL.</p>

<p>href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</p>
<?php
   // echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
</body>
</html>