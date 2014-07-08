<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Password Generator</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>

        <h2>XKCD-Style Password Generator</h2>
        <?php if (!isset($_POST['submit'])) {?>

        <form method="POST" action="index.php">
            Number of Words in Password: 
            <input type="text" name="passwordlength" size='3'><br><br>
            Make the first letter uppercase?<br>   
            <input type="radio" name="case" value="1">Yes<br>
            <input type="radio" name="case" value="0">No<br><br>
            Include a symbol?<br>   
            <input type="radio" name="symbol" value="1">Yes<br>
            <input type="radio" name="symbol" value="0">No<br><br>
            Include a number?<br>
            <input type="radio" name="number" value="1">Yes<br>
            <input type="radio" name="number" value="0">No<br><br>
            <input type="submit" name="submit" method="submit">
        </form>

        <p>This app will generate an "XKCD Password" - a password that will string common words together at random. Feel free to add a symbol or number.<p>

        <?php } else {
        ?>
        <form method="POST" action="index.php">
            Number of Words in Password: 
            <input type="text" name="passwordlength" size='3'><br><br>
            Make the first letter uppercase?<br>   
            <input type="radio" name="case" value="1">Yes<br>
            <input type="radio" name="case" value="0">No<br><br>
            Include a symbol?<br>   
            <input type="radio" name="symbol" value="1">Yes<br>
            <input type="radio" name="symbol" value="0">No<br><br>
            Include a number?<br>
            <input type="radio" name="number" value="1">Yes<br>
            <input type="radio" name="number" value="0">No<br><br>
            <input type="submit" name="submit" method="submit"><br><br>
        </form>

        <h2> Password: </h2>


        <?php


        $s = $n = 1;
        $passwordlength = (int)$_POST['passwordlength'];
        $s = $_POST['symbol'];
        $n = $_POST['number'];
        $c = $_POST['case'];
        $data = file('common.ini');
        $dictionary = $data;
        $data = file('symbol.ini');
        $symbols = $data;
        $data = file('numbers.ini');
        $numbers = $data;


           for($i=0; $i<$passwordlength; $i++)
            {

                $r = rand(0,count($dictionary)-1);
                $passwordarray[$i] = $dictionary[$r];
                if($i==0 && $c){
                echo ucfirst($passwordarray[$i]);
                }
                else {
                    echo ($passwordarray[$i]);
                }

                if ($i != ($passwordlength - 1)){
                    //echo "- ";
                }
            }
            if($s){
            $r = rand(0,count($symbols)-1);
            $passwordsymbol[0] = $symbols[$r];
            echo $passwordsymbol[0];
            }

            if($n){
            $r = rand(0,count($numbers)-1);
            $passwordnumber[0] = $numbers[$r];
            echo $passwordnumber[0];
            }
        }
        echo "<br><br>";
        ?>
        <img id="xkcd" src="http://imgs.xkcd.com/comics/password_strength.png">

    </body>
</html>