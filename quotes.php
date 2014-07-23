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
        <style>
            body{
                font-style: italic;
                font-size: 20px;

            }
        	form{
        		display: inline;
        	}
        </style>

    </head>
    <body>
        <?php if (!isset($_POST['submit'])) {?>

        <form method="POST" action="quotes.php">  
			<input type="hidden" name="case" value="Nietzsche">
            <input type="submit" name="submit" method="submit" value="Nietzsche">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Hume">
            <input type="submit" name="submit" method="submit" value="Hume">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Kant">
            <input type="submit" name="submit" method="submit" value="Kant">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Socrates">
            <input type="submit" name="submit" method="submit" value="Socrates">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Mill">
            <input type="submit" name="submit" method="submit" value="Mill">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Marx">
            <input type="submit" name="submit" method="submit" value="Marx">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Spinoza">
            <input type="submit" name="submit" method="submit" value="Spinoza">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Sartre">
            <input type="submit" name="submit" method="submit" value="Sartre">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Popper">
            <input type="submit" name="submit" method="submit" value="Popper">
        </form>
        <form method="POST" action="quotes.php">
			<input type="hidden" name="case" value="Heidegger">
            <input type="submit" name="submit" method="submit" value="Heidegger">
        </form>


        <?php } else {
        ?>
        
        


        <?php

        ?>
            <br><br><br><br>
        <form method="POST" action="quotes.php">  
            <input type="hidden" name="case" value="Nietzsche">
            <input type="submit" name="submit" method="submit" value="Nietzsche">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Hume">
            <input type="submit" name="submit" method="submit" value="Hume">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Kant">
            <input type="submit" name="submit" method="submit" value="Kant">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Socrates">
            <input type="submit" name="submit" method="submit" value="Socrates">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Mill">
            <input type="submit" name="submit" method="submit" value="Mill">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Marx">
            <input type="submit" name="submit" method="submit" value="Marx">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Spinoza">
            <input type="submit" name="submit" method="submit" value="Spinoza">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Sartre">
            <input type="submit" name="submit" method="submit" value="Sartre">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Popper">
            <input type="submit" name="submit" method="submit" value="Popper">
        </form>
        <form method="POST" action="quotes.php">
            <input type="hidden" name="case" value="Heidegger">
            <input type="submit" name="submit" method="submit" value="Heidegger">
        </form>

        <br><br><h2> Quote: </h2>
        <?php

        $philosopher = $_POST['case'];
        $nietzsche = file('nietzsche.ini');
        $hume = file('hume.ini');
        $kant = file('kant.ini');
        $socrates = file('socrates.ini');
        $mill = file('mill.ini');
        $marx = file('marx.ini');
        $spinoza = file('spinoza.ini');
        $sartre = file('sartre.ini');
        $popper = file('popper.ini');
        $heidegger = file('heidegger.ini');

        if($philosopher=='Nietzsche'){
        	$r = rand(0,count($nietzsche)-1);
        	echo($nietzsche[$r]);
        }
        elseif($philosopher=='Hume'){
        	$r = rand(0,count($hume)-1);
        	echo($hume[$r]);
        }
        elseif($philosopher=='Kant'){
        	$r = rand(0,count($kant)-1);
        	echo($kant[$r]);
        }
        elseif($philosopher=='Socrates'){
        	$r = rand(0,count($socrates)-1);
        	echo($socrates[$r]);
        }
        elseif($philosopher=='Mill'){
        	$r = rand(0,count($mill)-1);
        	echo($mill[$r]);
        }
        elseif($philosopher=='Marx'){
        	$r = rand(0,count($marx)-1);
        	echo($marx[$r]);
        }
        elseif($philosopher=='Spinoza'){
        	$r = rand(0,count($spinoza)-1);
        	echo($spinoza[$r]);
        }
        elseif($philosopher=='Sartre'){
        	$r = rand(0,count($sartre)-1);
        	echo($sartre[$r]);
        }
        elseif($philosopher=='Popper'){
        	$r = rand(0,count($popper)-1);
        	echo($popper[$r]);
        }
        elseif($philosopher=='Heidegger'){
        	$r = rand(0,count($heidegger)-1);
        	echo($heidegger[$r]);
        }
        


        echo "<br>" . "- " . $philosopher . " -";

            
        }
        echo "<br><br>";
        ?>

    </body>
</html>