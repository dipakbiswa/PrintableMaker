<?php session_start(); ?>
<?php 
    if (!isset($_SESSION['username'])) {
        header("location: ../login.php");
    }
?>
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
    <title>Blank Comic Book Builder</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">
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
                        <h4 class="page-title">Blank Comic Book Pages</h4>
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
                <form method="POST" action="genpdf.php">
                <div class="row justify-content-center">
                	
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 1</h3>
                                <img src="1.png" width="250px"><br><br><a target="_blank" href="1.png" class="preview btn d-grid btn-danger text-white" >Preview</a><br>
                                <input type="text" name="layout1" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 2</h3>
                               <img src="2.png" width="250px"><br><br><a target="_blank" href="2.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                               <input type="text" name="layout2" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 3</h3>
                                <img src="3.png" width="250px"><br><br><a target="_blank" href="3.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                                <input type="text" name="layout3" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 4</h3>
                               <img src="4.png" width="250px"><br><br><a target="_blank" href="4.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                               <input type="text" name="layout4" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 5</h3>
                                <img src="5.png" width="250px"><br><br><a target="_blank" href="5.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                                <input type="text" name="layout5" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 6</h3>
                                <img src="6.png" width="250px"><br><br><a target="_blank" href="6.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                                <input type="text" name="layout6" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 7</h3>
                                <img src="7.png" width="250px"><br><br><a target="_blank" href="7.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                                <input type="text" name="layout7" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 8</h3>
                                <img src="8.png" width="250px"><br><br><a target="_blank" href="8.png" class="preview btn d-grid btn-danger text-white">Preview</a><br>
                                <input type="text" name="layout8" placeholder="Number Of Pages" class="form-control">
                            </center>
                        </div>
                    </div>

                    <!--<div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center><h3 class="box-title">Layout 9</h3>
                                <a href="layout9/index.php"><img src="layout9/preview.png" width="250px"></a><br><br><a target="_blank" href="layout9/preview.png" class="preview btn d-grid btn-danger text-white">Preview</a>
                            </center>
                        </div>
                    </div>-->
                    <input type="text" name="name" placeholder="Book Nmae" class="form-control" required><br><br>
                    <input type="submit" name="create" value="Create" class="preview btn d-grid btn-danger text-white">
                    
                   
                </div>
            </form>
               <br><br><br> <center><h3>More Comming Soon</h3></center>
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