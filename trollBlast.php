<?php 

require '/home/ubuntu/vendor/autoload.php';

$senderName = $_POST["sender"];//"Devon";
//$candidate = "Trump";
$phoneNumber = $_POST["phone"];//"7276418026";
$carrier = $_POST["carrier"];


$handleArray = array(
	
	"Verizon" => "@vzwpix.com",
	"ATT" => "@mms.att.net",
	"Sprint" => "@messaging.sprintpcs.com",
	"TMobile" => "@tmomail.net", 
	
);

$targetEmail = $phoneNumber.$handleArray[$carrier];


$memesList = array("0.jpg", "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "13.jpg", "14.jpg");

//compiles a list of the filepaths of the memes that match the candidate

$memesIndex = range(1, count($memesList));
shuffle($memesIndex);

	$email = new PHPMailer();
	$email->SetFrom($senderName."@polititroll.me");
//	$email->AddReplyTo($senderName."@mail.polititroll.me", $senderName);
//	$email->FromName  = 'Polititroll';
	$email->Subject   = "";
	$email->AddAddress( $targetEmail );
	$email->Body      = "You are being #Polititrolled by your friend ".$senderName."! Polititroll them back at polititroll.me ! Or, reply STOP if you do not wish to recieve trolls from ".$senderName." or your other friends after this blast.";


for($i=0; $i<2; $i++){
	
	$file_to_attach = 'images/'.$memesList[$memesIndex[$i]];
	$email->AddAttachment($file_to_attach);
	
}

	$email->Send();

echo "Success! We've blasted your friend with a #Polititroll!";

?> 

