<?php

	session_start();

	//includeing phpMailer
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


    include 'dbcon.php';

    if (isset($_POST['signup'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

       $email_query = "select * from user where email = '$email'";
       $email_query_run = mysqli_query($conn, $email_query);

       $email_row = mysqli_num_rows($email_query_run);

       if ($email_row>0) {
           $signup_status = "Email Already Registed";
       }else{
        if ($password === $cpassword) {

        	//Verification Code Generate
        	$verification_code = bin2hex(random_bytes(16));

        
        	

            $insert_query = "insert into user(name, email, phone, password, verification_code, is_verified) values('$name', '$email', '$phone', '$password','$verification_code','0')";
            $insert_query_run = mysqli_query($conn, $insert_query);
            if ($insert_query_run && sendMail($email, $name, $verification_code)) {
                $signup_status = "Account Created Successfully! Please check your email and verify your account!";
            }
        }
        else{
            $signup_status = "Passwords are not matched!";
        }
       }
    }



    function sendMail($email, $name, $verification_code)
    {
    	require 'PHPMailer/PHPMailer.php';
    	require 'PHPMailer/SMTP.php';
    	require 'PHPMailer/Exception.php';

    	$mail = new PHPMailer(true);

    	try {
		    //Server settings
		    $mail->isSMTP();                                            //Send using SMTP
		    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $mail->Username   = 'no-reply@backonhost.com';                     //SMTP username
		    $mail->Password   = 'ddDD96147420##';                               //SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		    //Recipients
		    $mail->setFrom('no-reply@backonhost.com', 'Back On Host');
		    $mail->addAddress($email, $name);     //Add a recipient
		    

		    //Content
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = 'Email Verification From Back On Host';
		    $mail->Body    = "Hello $name,<br> Thanks for registration! <br> 
		    					<a href='http://localhost/verify.php?email=$email&verification_code=$verification_code'>Click Here</a> to verify you Account.<br>
		    					Thank You";

		    $mail->send();
		    return true;
		} catch (Exception $e) {
			return false;
		}
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Signup Printable Maker</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="app app-signup p-0">  

    <div class="row justify-content-center">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="logo.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>
						<p>Must create your account with the email you purchess this software.</p>
										
					<?php  

						if (isset($signup_status)) {
							?>
								<center><h3 class="auth-heading text-center mb-5" style="color:red;"><?php echo $signup_status; ?></h3></center>
							<?php
						}

					?>
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="#" method="POST">         
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Name</label>
								<input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Full name" required="required">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" required="required">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-phone">Your Phone</label>
								<input id="signup-email" name="phone" type="text" class="form-control signup-email" placeholder="Phone" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Create a password" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Confirm Password</label>
								<input id="signup-password" name="cpassword" type="password" class="form-control signup-password" placeholder="Confirm your password" required="required">
							</div>
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword" required>
									<label class="form-check-label" for="RememberPassword">
									I agree to Portal's <a href="terms.html" class="app-link" target="_blank">Terms of Service</a> and <a href="privacy-policy.html" class="app-link" target="_blank">Privacy Policy</a>.
									</label>
								</div>
							</div><!--//extra-->
							<br>
							<div class="text-center">
								<button type="submit" name="signup" class="btn d-grid btn-danger text-white">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="index.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    
    </div><!--//row-->


</body>
</html> 

