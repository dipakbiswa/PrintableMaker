
<?php session_start(); ?>
<?php 
    if (!isset($_SESSION['username'])) {
        header("location: ../login.php");
    }
?>
<?php
    
    


    if (isset($_POST['create'])) {
        $number = $_POST['number'];
        $name = $_POST['name'];

    }

    $_SESSION['number'] = $number;
    $_SESSION['name'] = $name;





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
    <title>Ample Admin Lite Template by WrapPixel</title>
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
                        <h4 class="page-title">Recipe Book Creator</h4>
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
                        <div class="white-box analytics-info" style="background: #CACFD2 ;">
                            <center>
                                <center><h2>Recipe Book Builder</h2></center>
                                <hr>
                                <div class="col-lg-4 col-md-12">
                                <form action="create-pdf.php" method="post">
                                    <?php 
                                        for($i=0; $i < $number; $i++) { 
                                            ?>
                                                <center><h3>Recipe Number: <?php echo $i+1; ?></h3></center>
                                                <hr>
                                                <label for="name">Recipe Name</label>
                                                <input type="text" placeholder="Recipe Name" class="form-control" name="name<?php echo $i ?>" required><br>

                                                <label for="ingredients">Ingredients</label>
                                                <textarea placeholder="Ingredients" class="form-control" name="ingredients<?php echo $i ?>" required></textarea>
                                                <p style="font-size: 15px;">Devide Multiple Ingredients By Clicking Enter</p>
                                                <br>

                                                <label for="image">Recipe Image URL</label>
                                                <input type="url" placeholder="Image URL" class="form-control" name="image<?php echo $i ?>" required>
                                                <p style="font-size: 15px;">Image Size:  for best result</p>
                                                <br>

                                                <label for="recipe">Recipe</label>
                                                <textarea class="form-control" placeholder="Recipe" name="recipe<?php echo $i ?>" required></textarea><br>
                                            <?php
                                        }
                                    ?>

                                    <input type="submit" class="btn d-grid btn-danger text-white" name="recipe" value="Create PDF">
                                </form>
                                </div>
                            </center>
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