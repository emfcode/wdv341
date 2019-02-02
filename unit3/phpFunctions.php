<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <p>1. Create a function that will accept a date input and format it into mm/dd/yyyy format.</p>
        <?php 
            $date = date("m/d/Y");
                function monDayYear($date) {
                    echo $date;
                }
            monDayYear($date);
        ?>
    <p>2. Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.</p>
        <?php
            $date = date("d/m/y");
                function dayMonYear($date) {
                    echo $date;
                }
            dayMonYear($date);
        ?>
    <p>3. Create a function that will accept a string input. It will do the following things to the string:<br/>
    a. Display the number of characters in the string<br/>
    b. Trim any leading or trailing whitespace<br/>
    c. Display the string as all lowercase characters<br/>
    d. Will display whether or not the string contains "DMACC" either upper or lowercase<br/></p>
        <?php function stringIn() {

        }

        ?>
    <p>4. Create a function that will accept a number and display it as a formatted number. Use 1234567890 for your testing.</p>
        <?php function formatNum(){

        }

        ?>
    <p>5. Create a function that will accept a number and display it as US currency.  Use 123456 for your testing.</p>
        <?php function formatDollar(){

        }

        ?>
</body>
</html>