<?php 
	session_start();

	include 'dbcon.php';

	if (isset($_GET['email']) && $_GET['verification_code']) {

		$email = $_GET['email'];
		$verification_code = $_GET['verification_code'];


		$query_for_verify = "select * from user where email='$email' and verification_code='$verification_code'";
		$query_query_for_verify_run = mysqli_query($conn, $query_for_verify);

		$fetch_data = mysqli_fetch_assoc($query_query_for_verify_run);
		$is_verify = $fetch_data['is_verified'];

		if ($is_verify == 0) {

			$verify_query = "update user SET is_verified = 1 WHERE email = '$email'";
			$verify_query_run = mysqli_query($conn, $verify_query);

			if ($verify_query_run) {
				$verify_status = "Your Account verified please <a href='login.php'>login</a>";
			}
			
		}
		else{

			$verify_status = "Your Account is already verified please <a href='login.php'>login</a>";
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
    <title>Verify | Printable Maker</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="app app-login p-0">    	
    <div class="row justify-content-center">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="logo.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
					<?php  

						if (isset($verify_status)) {
							?>
								<center><h3 class="auth-heading text-center mb-5" style="color:red;"><?php echo $verify_status; ?></h3></center>
							<?php
						}

					?>
			        	

			    </div><!--//auth-body-->
		    
			    
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    
    </div><!--//row-->


</body>
</html> 
