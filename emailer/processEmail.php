<!DOCTYPE html>
<html>
    <?php 

    include("emailer.php");

    $classEmail = new emailer();

    $classEmail->setSenderAddress("main@ericfenimore.com");
    $classEmail->setSendToAddress("emfenimore@dmacc.edu");
    $classEmail->setSubjectLine("Class Update");
    $classEmail->setMessageBody("Today in class we worked on a PHP emailer class....");

    $validEmail = $classEmail->sendNewMessage();

    ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>processEmail.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>Sender Email: <?php echo $classEmail->getSenderAddress(); ?></p>
    <p>Sent To: <?php echo $classEmail->getSendToAddress(); ?></p>
    <p>Subject Line: <?php echo $classEmail->getSubjectLine(); ?></p>
    <p>Message: <?php echo $classEmail->getMessageBody(); ?></p>

    <?php 
        if ($validEmail) {
            echo " <p>Email successfully sent.</p>";
        }
            else
            {
                echo "<p>Email not sent, please try again later. </p>";
            }
    ?>

</body>
</html>