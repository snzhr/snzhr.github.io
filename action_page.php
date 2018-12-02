<?php
if(isset($_POST['submit'])){
$to="name@yourwebsite.com";// this is your Email address
$from=$_POST['email'];// this is the sender's Email address
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['ph_number'];
$age=$_POST['age'];
$subject="Form submission";
$subject2="Copy of your form submission";
$ph_number="Name: ".$name."\nEMAIL is: ".$email."\Contact Number: ".$_POST['ph_number']."\nAge:".$_POST['age'];
$ph_number2="Here is a copy of your Form ".$name."\n\n".$_POST['ph_number'];
$headers="From:".$from;
$headers2="From:".$to;
mail($to,$subject,$ph_number,$headers);
mail($from,$subject2,$ph_number2,$headers2);// sends a copy of the ph_number to the sender
echo "Thanks".$name."We received your email.";
// You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>