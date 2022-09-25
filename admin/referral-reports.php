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
                        <h4 class="page-title"><i class="mdi mdi-chart-pie"></i> Referral Reports</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reports</li>
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
                        <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                  <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-print"></i> print</a>
                        <a class="btn btn-sm elevation-2" href="#" data-toggle="modal"
                        data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i
                        class="fa fa-file-excel"></i> export</a>
                     <div class="card">
                        <div class="card-body">
                           <table class="table table-bordered mytable">
                               <thead>
                                 <tr>
                                    <th>Reason for Referral</th>
                                    <th>Number of Reports</th>
                                 </tr>
                                </thead>
                              <tbody>
                                 <tr>
                                    <td>Bullying</td>
                                    <td>25</td>
                                 </tr>
                                 <tr>
                                    <td>Fear</td>
                                    <td>30</td>
                                 </tr>
                                 <tr>
                                    <td>Depression</td>
                                    <td>10</td>
                                 </tr>
                                 <tr>
                                    <td>Mental Health</td>
                                    <td>20</td>
                                 </tr>
                                 <tr>
                                    <td>Lying</td>
                                    <td>15</td>
                                 </tr>
                                 <tr>
                                    <td>Stressed</td>
                                    <td>30</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Total</strong></td>
                                    <td><strong>130</strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                     <div class="card">
                        <div class="card-body">
                           <canvas id="chartjs-pie" height="250"></canvas>
                        </div>
                     </div>
                  </div>
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
    <script src="../dist/js/chart.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Pie chart
      new Chart(document.getElementById("chartjs-pie"), {
        type: "pie",
        data: {
          labels: ["Bullying", "Fear", "Depressed", "Mental Health", "Lying", "Stressed"],
          datasets: [{
            data: [25,30,10,20,15,30],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger,
              window.theme.success,
              window.theme.info,
              window.theme.indigo,
            ],
            borderColor: "transparent"
          }]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: true
          }
        }
      });
    });
  </script>

</body>

</html>