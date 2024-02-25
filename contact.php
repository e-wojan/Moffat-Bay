<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Bay Lodge Contact Us Page</title>
</head>
<script>

</script>
<body>
    <?php
  session_start();
  include "register.php";
  ?>

    <nav>
      <!--logo-->
      <!--top navigation bar-->
      <div class="navigation">
        <a href="./index.php">Home</a>
        <a href="./about.php" >About</a>
        <a href="./contact.php" class="active">Contact Us</a>
        <a href="./attractions.php">Attractions</a>
        <a href="./reservations.php">Reservations</a>
        <?php
            if (isset($_SESSION['Email'])) {

                ?>
                
                <a href="./reservation_lookup.php">My Reservations</a>
                
                
                <?php
            } else {
                ?>
                <a href="./registration_page.php">Registration</a>
                <?php
            }
            ?>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>
                <div id="logout"><a href="Logout.php" id="logoutlink">Logout</a></div>
                <?php
            } else {
                ?>
                <div class="navitemlogin"><a href="Login_Page.php">Login</a></div>
                <?php
            }
            ?>


            <!-- <div class="navitemlogin"><a href="./login.html" class="active">Login</a></div> -->
            <div class="username">
                <?php
                if (isset($_SESSION['Email'])) {

                    ?>
                    <div class="" role="">Hello,
                        <?php echo $_SESSION['Email'] . "!"; ?>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="username">
            <?php
            if (isset($_SESSION['Email'])) {

            ?>
            <div class="" role="">Hello, 
                <?php echo $_SESSION['Email']."!"; ?>
            </div>
            <?php
            }
            ?>
            </div>
      </div>
    </nav>

    <div class="bannerimg">
      <p>Moffat Bay Lodge</p>
    </div>
     
    
     <div class="container"> <!--container-->
    <div class="bodyinformation">
   <h2 id="registrationheader">Contact Us</h2>
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
	header('Location: contactthankyou.php');
} 

}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="en">
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

<div class="contactcontainer">

   <div class="contactinformation">
       <p>
           One of the most important aspects of any lodge experience is the ease of communication and accessibility.
           At our lodge, we understand the importance of providing clear and efficient ways for guests to contact us.
           We have established multiple channels of communication to ensure that your needs and preferences are met without any hassle.
           <br>
           <br>
          
           First and foremost, we have a dedicated phone line which is available 24/7.
            Our friendly and professional staff are just a phone call away, ready to assist you with any inquiries or concerns you may have.
             Whether you need assistance with reservations, want to inquire about nearby attractions, or have any specific requests,
             our team is committed to providing you with the assistance you need to make your stay truly memorable.
             <br>
             <br>


             Secondly, we have the contact form which you can fill out with your inquiries, feedback,
             or issues  and submit it directly to Moffat Bay Lodge.
             <br>
             <br>
  
             <h3>Email: <a href = "mailto: moffatbaylodge@groupb.com">moffatbaylodge@groupb.com</a>
               <br>
               Telephone: <a href="tel:8005555555"> (800) 555-5555</a>
               <br>
           </div>


<div class="contactform">
 <form name="contactFormEmail" method="post" >
   
 
     <label>Full Name <em style="color: red;">*</em></label>
     <input type="text" name="fullName" class="registrationinput" required>


     <br>


  
     <label>Email <em style="color: red;">*</em></label>
     <input type="email" name="emailUser" class="registrationinput" required>
       <br>
     <label>Message <em style="color: red;">*</em></label>
     <textarea name="messageUser" class="registrationinput" required></textarea>
     <br>
     


       <div id="submitbutton" style="text-align: center;">
           <button type="submit" name="send" class="btn">Send</button>
       </div>
 </form>
</div>

	     </div> <!--contactcontainer end -->
		     
</div> 
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
