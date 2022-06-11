<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #response { padding:20px; border:1px solid; background:#ccc; }
    </style>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Tricycle Management</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Vicente</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Khristian Vicente</h6>
              <span>Web Developer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="trikedata.php" class="active">
              <i class="bi bi-circle"></i><span>Tricycle Data</span>
            </a>
          </li>
          <li>
            <a href="driversoperators.php">
              <i class="bi bi-circle"></i><span>Driver / Operator Data</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
       </ul>
   
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>TRICYCLE DATA</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Trike Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Drive and Operators Table</h5>
              <!-- Extra large modal -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Add DATA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
     
















  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Operator Details</h5>

              <!-- General Form Elements -->
         <form method="POST" action="do_upload.php">
              

  
  
         <div class="row mb-3">
          
                <div id="web_cam">
                </div>
                <br/>
               
               
                <input type="hidden" name="image" class="image-tag">
              </div>
     
            <div class="dsp col-md-3">
                <div id="response">.</div>
            </div>
          
 
<!-- simple here configuration part a few settings and attach camera -->

      <div class="row mb-3">
                 
                  <div class="col-sm-3">
   <script language="JavaScript">
    Webcam.set({
        width: 200,
        height: 250,
        image_format: 'jpeg',
        jpeg_quality: 200
    });
  
    Webcam.attach( '#web_cam' );
  
    function take_snapshot() {
        Webcam.snap( function(web_cam_data) {
            $(".image-tag").val(web_cam_data);
            document.getElementById('response').innerHTML = '<img src="'+web_cam_data+'"/>';
        } );
    }
</script>

                  </div>
                </div>

                  <div class="row mb-2">
                 
                  <div class="col-sm-3">
                    <input type=button class="btn-success" value="Take Snapshot" onClick="take_snapshot()">
                  </div>
                  
                
                </div>




                <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">NAME</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Middle Name" name="mname">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                  </div>
                   <div class="col-sm-1">
                    <input type="text" class="form-control" placeholder="Jr./Sr." name="xname">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" placeholder="Address Line 1">
                  </div>
                
                
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" name="barangay" required>
                      <option value="" disabled selected>Barangay</option>
                      <option value="Apollo">Apollo</option>
                      <option value="Balut">Balut</option>
                      <option value="Calero">Calero</option>
                    </select>
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="Contact">
                  </div>
                </div>

                  <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">Name Of Spouse</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First Name" name="sfname">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Middle Name" name="smname">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="slname">
                  </div>
                 
                </div>


          
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Birth Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="bday">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">TYPE</label>
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required>
                      <option value="" disabled selected>SELECT TYPE HERE</option>
                      <option value="OPERATOR">OPERATOR</option>
                      <option value="OPERATOR/DRIVER">OPERATOR/DRIVER</option>
                     
                    </select>
                  </div>
                </div>


                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control" placeholder="LICENSE NUMBER" name="licensid">
                  </div>
                    <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="licensetype">
                          <option value="" disabled selected>SELECT LICENSE TYPE</option>
                      <option value="OPERATOR">PROFESSIONAL</option>
                      <option value="OPERATOR/DRIVER">NON-PROFESSIONAL</option>
                    </select>
                  </div>
                  </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License Validity</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="bday" placeholder="EXPIRATION" name="expiration">
                  </div>
                  </div>


                  <br><!--divider -->
                  <div class="row mb-3">
                     <label for="inputEmail" class="col-sm-12 col-form-label"><font color= "Green"><b>Tricycle Details</b></font></label>
                    </div>

              
                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>SERIAL NUMBERS:</b></label>
                  <div class="col-sm-2">
                    MV File number
                    <input type="text" class="form-control" name="fileno" placeholder="MV FILE NO." name="fileno">
                  </div>
                  <div class="col-sm-2">
                    Plate Number
                    <input type="text" class="form-control" name="plateno" placeholder="Plate Number" name="plateno">
                  </div>
                   <div class="col-sm-2">
                    Engine Number
                    <input type="text" class="form-control" name="engineno" placeholder="Engine Number" name="plateno">
                  </div>
                   <div class="col-sm-2">
                    Chasis Number
                    <input type="text" class="form-control" name="chasisno" placeholder="Chasis Number" name="chasisno">
                  </div>
                  </div>
            
<br>


                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>Other Details</b></label>
                  <div class="col-sm-2">
                    Maker
                    <input type="text" class="form-control" name="maker" placeholder="Maker" name="maker">
                  </div>
                  <div class="col-sm-2">
                    Piston Displacement
                    <input type="text" class="form-control" name="pdisplacement" placeholder="Piston Displacement" name="piston">
                  </div>
                   <div class="col-sm-2">
                    Cert. of Reg.
                    <input type="text" class="form-control" name="cor" placeholder="Certificate of Registration" name="cor">
                  </div>
                   <div class="col-sm-2">
                    Official Receipt No.
                    <input type="text" class="form-control" name="or" placeholder="OR" name="or">
                  </div>
                  </div>



<br>

                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>FRANCHISE</b></label>
                  <div class="col-sm-4">
                    Date of Issuance
                    <input type="date" class="form-control" name="dateofissue" placeholder="dateofissue" name="dateofissue">
                  </div>
                  <div class="col-sm-1">
                    Brgy #
                    <input class="form-control" type="text" name="brgycode" maxlength="2"  min="0" max="9999" step="1" placeholder="_ _" pattern="[0-9]{4}" style="color:#888;" required/>
                  </div>
                  -
                   <div class="col-sm-3">
                    Body Number
                    <input class="form-control" type="text" name="bdynumber" maxlength="4"  min="0" max="9999" step="1" placeholder="_ _ _ _" pattern="[0-9]{4}" style="color:#888;" required/>
                  </div>
                  
                  </div>
            
             <!-- End General Form Elements -->

            </div>
          </div>

        </div>
</div></section>



          <div class="modal-footer">
               <button type="submit" name="saveevent"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>









                <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl">ADD DATA OPERATOR / DRIVER </button>
              </div>
              <br></br>

             <table id="tblPeople" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Barangay</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>Driver / Operator</td>
                <td>2011-04-25</td>
                <td>Male</td>
                <td>Balut</td>
                <td>xxx</td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
              <th>Name</th>
                <th>Type</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Barangay</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>


 
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblPeople').DataTable();
} );
</script>

  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>