<?php

include("emailer.php"); //makes your program available

$testEmail = new emailer();

$testEmail->setSenderAddress("helper@weather.com");

echo $testEmail->getSenderAddress()."<br>"; 

$testEmail->setSendToAddress("emfenimore@dmacc.edu");

echo $testEmail->getSendToAddress()."<br>";

$testEmail->setSubjectLine("Weather Report");

echo $testEmail->getSubjectLine()."<br>";

$testEmail->setMessageBody("This is a test of the weather broadcasting system.");

echo $testEmail->getMessageBody()."<br>";

echo $testEmail->sendNewMessage();
//----------------------

$clientEmail = new emailer();

$clientEmail->setSenderAddress("helper@weather.com");

$clientEmail->setSendToAddress("contact@busines.com");

$clientEmail->setSubjectLine("Weather Report");

$clientEmail->setMessageBody("This is a test of the weather broadcasting system.");
?>