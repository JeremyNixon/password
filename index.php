<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Password Generator</title>
        <style>

        </style>
    </head>
    <body>

        <?php

        $passwordlength = 5;
        $data = file('words.ini');
        $dictionary = $data;
           for($i=0; $i<$passwordlength; $i++)
            {


                $r = rand(1,count($dictionary));
                $passwordarray[$i] = $dictionary[$r];
                echo $passwordarray[$i];

                if ($i != ($passwordlength - 1)){
                    echo "- ";
                }
            }
        

      
        ?>
    </body>
</html>