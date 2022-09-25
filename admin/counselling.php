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
                            <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-plus"></i> Add New</a>
                        <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Guidance Message</th>
                                            <th scope="col">Strategies use</th>
                                            <th scope="col">Video Record link</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Date and Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>William Smith</td>
                                            <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Vestibulum porttitor laoreet faucibus.</td>
                                            <td>strategy name</td>
                                            <td>Feale</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>John Clement</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alexam Angles</td>
                                            <td>Maecenas mattis tempor libero pretium.</td>
                                            <td>strategy name</td>
                                            <td>https://videolink101.com</td>
                                            <td>Remarks</td>
                                            <td>Dec 2, 2021</td>
                                            <td><a href="javascript:void(0)"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                            </td>
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