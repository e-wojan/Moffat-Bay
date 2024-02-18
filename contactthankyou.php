<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CSD460 Moffat Moffat Bay Lodge Contact Us Page</title>
</head>
<script>

</script>
<body>
    
    <nav>
      <!--logo-->
      <!--top navigation bar-->
      <div class="navigation">
        <a href="./index.php">Home</a>
        <a href="./about.php" >About</a>
        <a href="./contact.php" class="active">Contact Us</a>
        <a href="./attractions.php">Attractions</a>
        <a href="./reservations.php">Reservations</a>
       
      </div>
    </nav>

    <div class="bannerimg">
      <p>Moffat Bay Lodge</p>
    </div>
  
   
      
    
    <div class="container"> <!--container-->
    <div class="bodyinformation">
   <h2 id="registrationheader">Thank you from Moffat Bay Lodge</h2>
  <?php 
$errors = '';
$contactemail = 'racwhite2@my365.bellevue.edu';//<-----Put Your email address here.

$fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
$emailUser = isset($_POST['emailUser']) ? $_POST['emailUser'] : '';
$messageUser = isset($_POST['messageUser']) ? $_POST['messageUser'] : '';

if (isset($_POST['send'])){

if(empty($_POST['fullName'])  || 
   empty($_POST['emailUser']) || 
   empty($_POST['messageUser']))
{
    $errors .= "\n All fields required, please try again";
}

$fullname = $_POST['fullName']; 
$emailUser = $_POST['emailUser']; 
$messageUser = $_POST['messageUser']; 

if (!filter_var($emailUser, FILTER_VALIDATE_EMAIL))

{
    $errors .= "\n Invalid email address, please try again";
}

if(empty($errors))
{
	$to = $contactemail; 
	$email_subject = "Contact form submission: $fullName";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $fullName \n Email: $emailUser \n Message \n $messageUser"; 
	
	$headers = "From: $contactemail\n"; 
	$headers .= "Reply-To: $emailUser";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 

}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact Thank You</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>





    


<div class="form-container">
  <p style="text-align:center;">Thank you for submitting the contact form, we will contact you soon!
</p>

</div> 

<div class="footer">
    <p>This website was created as a class assignment
        <br>
    CSD460 Capstone in Software Development Project - Group B
    <br>
    Bellevue University</p>
</div>
</body>
</html>
