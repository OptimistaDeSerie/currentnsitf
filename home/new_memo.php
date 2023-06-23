<?php 
session_start();
if(!isset($_SESSION['admin-log'])){
    header("location:../");

}


$account =  $_SESSION['role'] ;

$branch =  $_SESSION['fbranch'];





?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>NSITF ebs new staff</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="jquery/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css"    href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></link>

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
<?php include("components/sidebar.php"); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

        <?php  include("components/navbar.php")?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             
              <div class="row">
                <!-- Order Statistics -->
                
                
                            <div class="" style="width:50%;">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">New Memo</h5>
                      <p> <?php if(isset($_SESSION['errors'])){ echo "<span style='color:red'>" .$_SESSION['errors']. "</span>" ;} ?></p>
                   
                    </div>
              
                    <div class="card-body">
                      <form action="./processor/momo_val" method="POST">
              
                           
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Title</label>
                          <div class="input-group input-group-merge">
                               
                            <input
                            
                             required
                              type="text"
                              class="form-control"
                              id="basic-icon-default-fullname"
                              placeholder="Memo Title"
                              aria-label="First Name"
                              name="title"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        
                         <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Destination</label>
                          <div class="input-group input-group-merge">
                               
                            <select class="form-select" aria-label="Default select example" id="country-dropdown" name="destination">
                                
                                
  <option>-Select Destination-</option>      
  
  <option value="all">All Branch</option>
  <?php
                                                                                        require_once "db.php";
                                                                                        $result = mysqli_query($conn,"SELECT * FROM departments order by department_id ");
                                                                                        while($row = mysqli_fetch_array($result)) {
                                                                                        ?>
                                                                                  <option value="<?php echo $row['department_id'];?>"><?php echo $row["dep_unit"];?></option>
<?php
}
?>
                                                                                   
</select>
                          </div>
                        </div>
                        
                       <div class="form-outline">
                            <label class="form-label" for="textAreaExample">Memo </label>
  <textarea class="form-control" name="content" id="textAreaExample1" placeholder="Memo: Write here" rows="4"></textarea>
 
</div>
                        
                        
                        
                       
                       <br>
                        <button type="submit" class="btn btn-primary">Braodcast</button>
                      </form>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
       <?php include("components/footer.php") ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
      $(document).ready(function() {
        $('#tabulka_kariet1').DataTable();
      });
    </script>
</html>