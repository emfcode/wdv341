<?php

class emailer {

    private $messageBody;
    private $senderAddress;
    private $sendToAddress;
    private $subjectLine;

    public function __construct() {
        //empty constructor with no functionality
    }

    //setters and getters
    public function setMessageBody($inMessage){
        $this->messageBody = $inMessage;
    }
    public function getMessageBody(){
        return $this->messageBody;
    }

    public function setSenderAddress($inSender){
        $this->senderAddress = $inSender;
    }
    public function getSenderAddress(){
        return $this->senderAddress;
    }

    public function setSendToAddress($inSendTo){
        $this->sendToAddress = $inSendTo;
    }
    public function getSendToAddress(){
        return $this->sendToAddress;
    }

    public function setSubjectLine($inSubject){
        $this->subjectLine = $inSubject;
    }
    public function getSubjectLine(){
        return $this->subjectLine;
    }

    public function sendNewMessage(){
        $to = $this->getSendToAddress(); 
        $subject = $this->getSubjectLine();
        $message = $this->getMessageBody();
        $headers = "From: ".$this->getSenderAddress()."\r\n";

        return mail($to,$subject,$message,$headers);
    }
}

?>