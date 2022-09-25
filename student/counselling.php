<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>

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

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-account-switch"></i> Counselling</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counselling</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                        <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Guidance Message</th>
                                            <th scope="col">Strategies use</th>
                                            <th scope="col">Video Record link</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Date and Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Vestibulum porttitor laoreet faucibus.</td>
                                            <td>strategy name</td>
                                            <td>Feale</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
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

    <?php include 'includes/footer.php'?>

</body>

</html>