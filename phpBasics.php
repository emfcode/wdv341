<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Basics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var number1 = 5;
        var number2 = 8;
        var total = number1 + number2;
    </script>

    <?php $yourName = "Eric Fenimore"; ?>

</head>
<body>
    <?php
	    echo "<h1>phpBasics.php</h1>";
    ?>

    <h2>
        <?php
            echo $yourName;
        ?>
    </h2>

    <p><?php
        echo "<script type=\"text/javascript\">
                document.write('<p>'+number1+'</p>');
                document.write('<p>'+number2+'</p>');
                document.write('<p>'+total+'</p>');
            </script>"
    ?></p>

</body>
</html>