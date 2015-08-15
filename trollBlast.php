<?php 

require '/home/ubuntu/vendor/autoload.php';

$senderName = $_POST["sender"];
$candidate = $_POST["candidate"];
$phoneNumber = $_POST["phone"];
$carrier = $_POST["carrier"];

$handleArray = array(
	
	"Verizon" => "@vzwpix.com",
	"ATT" => "@mms.att.net",
	"Sprint" => "@pm.sprint.com",
	"TMobile" => "@tmomail.net", 
	
);

$targetEmail = $phoneNumber.$handleArray[$carrier];

$memesList = array("0.jpg", "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "13.jpg", "14.jpg");
//compiles a list of the filepaths of the memes that match the candidate
shuffle($memesList);

try{
	$email = new PHPMailer();
	$email->SetFrom($senderName."@polititroll.me");
	$email->AddReplyTo($senderName."@polititroll.me", $senderName);
	$email->FromName  = $senderName;
	$email->Subject   = "Polititroll";
	$email->AddAddress( $targetEmail );
	$email->Body      = "You are being #Polititrolled by your friend ".$senderName."! Polititroll them back at polititroll.me ! Or, reply STOP if you do not wish to recieve trolls from ".$senderName." or your other friends after this blast.";

for($i=0; $i<5; $i++){
	
	$file_to_attach = 'images/'.$memesList[$i];
	$email->AddAttachment($file_to_attach);
	
}

	$email->Send();

echo "Success! We've blasted your friend with a #Polititroll! \n";

echo $phoneNumber.",".$senderName.",".candidate.",".$carrier.",".$targetEmail;


} catch (phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}
?> 

