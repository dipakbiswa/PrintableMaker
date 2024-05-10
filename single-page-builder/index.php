<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">
    <style type="text/css">
		.column {
		  float: left;
		  width: 50%;
		}
		.row{
			width: 100%;
		}
		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		  border: 1px solid #fff;
		}
		.center {
		  margin: auto;
		  width: 50%;
		  padding: 10px;
		}

	</style>
	<script type="text/javascript">
		
		

		function changeImg() {
			var images = ['images/Preview.png',
							'images/full-height-lines-left.png',
							'images/full-height-lines-right.png',
							'images/full-height-lines-left-right.png',
							'images/full-height-checkbox-left.png',
							'images/full-height-checkbox-right.png',
							'images/full-height-checkbox-left-right.png',
							'images/full-height-line-checkbox.png',
							'images/full-height-checkbox-line.png',
							'images/full-height-empty-box-left.png',
							'images/full-height-empty-box-right.png',
							'images/full-height-empty-box-left-right.png',
							'images/full-height-line-empty-box.png',
							'images/full-height-empty-box-line.png',
							'images/1_2-lines-1_2-empty-box-right.png',
							'images/1_2lines-1_2-empty-box-left.png',
							'images/1_2-lines-1_2-right-left-right.png',
							'images/1_2-lines-empty-box-full-height.png',
							'images/1_2-full-height-lines-empty-box.png']
			type = document.getElementById('type').value;
			type2 = document.getElementById('type2').value;
			//alert(type)

			
			if (type === 'Select1' && type2 === 'Select2') {
				document.getElementById('images').src = images[0]
			}

			if (type === 'full-height-lines1') {
				document.getElementById('images').src = images[1]
			}
			if (type2 === 'full-height-lines2') {
				document.getElementById('images').src = images[2]
			}
			if (type === 'full-height-lines1' && type2 === 'full-height-lines2') {
				document.getElementById('images').src = images[3]
			}

			
			if (type === 'full-height-checkboxes1') {
				document.getElementById('images').src = images[4]
			}
			if (type2 === 'full-height-checkboxes2') {
				document.getElementById('images').src = images[5]
			}
			if (type === 'full-height-checkboxes1' && type2 === 'full-height-checkboxes2') {
				document.getElementById('images').src = images[6]
			}
			if (type === 'full-height-lines1' && type2 === 'full-height-checkboxes2') {
				document.getElementById('images').src = images[7]
			}
			if (type === 'full-height-checkboxes1' && type2 === 'full-height-lines2') {
				document.getElementById('images').src = images[8]
			}
			if (type === 'full-height-empty-box1') {
				document.getElementById('images').src = images[9]
			}
			if (type2 === 'full-height-empty-box2') {
				document.getElementById('images').src = images[10]
			}
			if (type === 'full-height-empty-box1' && type2 === 'full-height-empty-box2') {
				document.getElementById('images').src = images[11]
			}
			if (type === 'full-height-lines1' && type2 === 'full-height-empty-box2') {
				document.getElementById('images').src = images[12]
			}
			if (type === 'full-height-empty-box1' && type2 === 'full-height-lines2') {
				document.getElementById('images').src = images[13]
			}
			if (type === 'lines-empty-box1') {
				document.getElementById('images').src = images[15]
			}
			if (type2 === 'lines-empty-box2') {
				document.getElementById('images').src = images[14]
			}
			if (type === 'lines-empty-box1' && type2 === 'lines-empty-box2') {
				document.getElementById('images').src = images[16]
			}
			if (type === 'lines-empty-box1' && type2 === 'full-height-lines2') {
				document.getElementById('images').src = images[17]
			}
			if (type === 'full-height-lines1' && type2 === 'lines-empty-box2') {
				document.getElementById('images').src = images[18]
			}

		}


	</script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <?php include '../header.php'; ?>
        <?php include '../nav.php'; ?>
        


        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Single Page Builder</h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="white-box analytics-info container" style="background: #CACFD2 ;">
                            <div class="row">
								<center><h2>Single Page Builder</h2></center>
								<hr>
								  

                            		<div class="col-sm">
									    <center>
									  		<h2>Preview</h2>
									  		<br><br><img src="images/Preview.png" style="border: 10px solid #808C94;" class="img-fluid" width="300" height="400" id="images">
									  		<br><br><br><br><br><br><br>
									  	</center>
								    </div>
								    <div class="col-sm">
								      <center>
								  		<h2>Build The Page</h2>
								  		<div class="center">
									  		<form action="genpdf.php" method="post">
											<div class="col-sm">
												<label for="left-side">Left Side Of Page</label>
												<select name="left-side" id="type" onchange="changeImg()" class="form-control" required>
													<option value="Select1">Select</option>
													<option value="full-height-lines1">Full height, lines</option>
													<option value="full-height-checkboxes1">Full height, checkboxes</option>
													<option value="full-height-empty-box1">Full height, empty box</option>
													<option value="lines-checkboxes1">1/2 lines, 1/2 checkboxes</option>
													<option value="lines-empty-box1">1/2 lines, 1/2 empty box</option>
													<option value="lines-lines1">1/2 lines, 1/2 lines</option>
													<option value="checkboxes-lines1">1/2 checkboxes, 1/2 lines</option>
													<option value="checkboxes-empty-box1">1/2 checkboxes, 1/2 empty box</option>
													<option value="checkboxes-checkboxes1">1/2 checkboxes, 1/2 checkboxes</option>
													<option value="empty-box-lines1">1/2 empty box, 1/2 lines</option>
													<option value="empty-box-checkboxes1">1/2 empty box, 1/2 checkboxes</option>
													<option value="empty-box-empty-box1">1/2 empty box, 1/2 empty box</option>
												</select><br>
											</div>
											<div class="col-sm">
												<label for="right-side">Right Side Of Page</label>
												<select name="right-side" id="type2" onchange="changeImg()" required class="form-control">
													<option value="Select2">Select</option>
													<option value="full-height-lines2">Full height, lines</option>
													<option value="full-height-checkboxes2">Full height, checkboxes</option>
													<option value="full-height-empty-box2">Full height, empty box</option>
													<option value="lines-checkboxes2">1/2 lines, 1/2 checkboxes</option>
													<option value="lines-empty-box2">1/2 lines, 1/2 empty box</option>
													<option value="lines-lines2">1/2 lines, 1/2 lines</option>
													<option value="checkboxes-lines2">1/2 checkboxes, 1/2 lines</option>
													<option value="checkboxes-empty-box2">1/2 checkboxes, 1/2 empty box</option>
													<option value="checkboxes-checkboxes2">1/2 checkboxes, 1/2 checkboxes</option>
													<option value="empty-box-lines2">1/2 empty box, 1/2 lines</option>
													<option value="empty-box-checkboxes2">1/2 empty box, 1/2 checkboxes</option>
													<option value="empty-box-empty-box2">1/2 empty box, 1/2 empty box</option>
												</select><br>
											</div>

												<!--<label for="orientation">Full Page</label>
												<select name="orientation" id="type3" onchange="changeImg()">
													<option value="Select">Select</option>
													<option value="Portrait">Portrait</option>
													<option value="Landscape">Landscape</option>
												</select><br><br>-->


												<label for="bname">Book Name</label>
												<input type="text" name="bname" required class="form-control" placeholder="Book Name" required><br>

												
												<label for="number">Number Of Pages</label>
												<input type="number" name="number" placeholder="Page Number" required class="form-control" required><br>

												<input type="submit" name="create" value="Create PDF" class="btn d-grid btn-danger text-white">
											</form>
										</div>
								  	</center>
								    </div>



								  </div>
								</div>
							</div>
                        </div>
            </div>

                    
                    

                    
                </div>
                
                
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app-style-switcher.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../js/pages/dashboards/dashboard1.js"></script>
</body>

</html>