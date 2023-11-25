<?php 
$errors = '';
$myemail = 'hi@giasolana.com';//<-----Put Your email address here.
if(empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$message = $_POST['message']; 


if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission";
	$email_body = "You have received a new message. ".
	" Here are the details: \n Message \n $message"; 
	
	$headers = "From: $myemail\n";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>
