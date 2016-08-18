<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title="Halaman Tidak Ditemukan | Gagapan Bali";
    require_once "view/v_head.php";
    ?>
</head>

<body>
  
    <!-- *** NAVBAR ***-->
    <?php
    require_once "view/v_navbar.php";
    ?>
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Page not found</li>
                    </ul>


                    <div class="row" id="error-page">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="box">

                                <p class="text-center">
                                    <img src="assets/img/logo.png" alt="Obaju template">
                                </p>

                                <h3>We are sorry - this page is not here anymore</h3>
                                <h4 class="text-muted">Error 404 - Page not found</h4>

                                <p class="text-center">To continue please use the <strong>Search form</strong> or <strong>Menu</strong> above.</p>

                                <p class="buttons"><a href="index.html" class="btn btn-primary"><i class="fa fa-home"></i> Go to Homepage</a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***-->
            <?php
            require_once "view/v_footer.php";
            ?>
        <!---END FOOTER--->
 
    </div>
    <!-- /#all -->


</body>

</html>