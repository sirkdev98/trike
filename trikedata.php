<?php 

include 'include/controller.php';

  ob_start();


//$cidd = $_SESSION['myVariable'];
if(isset($_SESSION['username'])){
    
      $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];

 

//testing github for me

}else{
    header("location:logout.php");
}

   if(time() - $_SESSION['timestamp'] > 5600) { //subtract new timestamp from the old one
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username']);
    
    header("Location:  logout.php"); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ORANI - OTRO</title>
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
      <a href="index.php" class="logo d-flex align-items-center">
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
            <span class="badge bg-primary badge-number"><!-- notification count --></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 0 new notifications
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
            <span class="badge bg-success badge-number"><!-- Messages Icon count--></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 0 new messages
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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $userfname; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $userfname; ?></h6>
              <span><?php echo $userrole; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
<?php $filter = $_GET['filter']?>
     <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tricycle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
       <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="trikedata.php?filter=all" <?php if($filter == "all"){ echo "class='active'";} ?>>
              <i class="bi bi-circle"></i><span>All Tricycle Data</span>
            </a>
          </li>
          <li>
            <a href="trikedata.php?filter=public" <?php if($filter == "public"){ echo "class='active'";}?>>
              <i class="bi bi-circle"></i><span>Public Tricycle</span>
            </a>
          </li>
           <li>
            <a href="trikedata.php?filter=private"<?php if($filter == "private"){ echo "class='active'";}?>>
              <i class="bi bi-circle"></i><span>Private Tricycle</span>
            </a>
          </li>
          <li>
            <a href="droppedunits.php?filter=">
              <i class="bi bi-circle"></i><span>DROPPED UNITS</span>
            </a>
          </li>

       </ul>

     <?php $filter  = $_GET['filter']; ?>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables2-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Drivers And Operators</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables2-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="driversoperators.php?filter=allops" <?php if($filter == "allops"){ echo "class='active'";} ?>>
              <i class="bi bi-circle"></i><span>Drivers And Operators</span>
            </a>
          </li>
          <li>
            <a href="driversoperators.php?filter=operators"<?php if($filter == "operators"){ echo "class='active'";} ?>>
              <i class="bi bi-circle"></i><span>Operators</span>
            </a>
          </li>
          <li>
           
          </li>


       </ul>
          <li class="nav-item">
        <a class="nav-link collapsed" href="downloads.php">
          <i class="bi bi-download"></i>
          <span>Downloadables</span>
        </a>
      </li>
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
              <h5 class="card-title">TRICYCLE Data Table</h5>
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


          <div class="col-sm-4">

                <div id="web_cam">
                </div>
                <br/>
               
               
                <input type="hidden" name="image" class="image-tag">
              </div>
     
            <div class="col-md-4">
               <center> <div id="response">..</div></center>

                  </div>

                 
                  <div class="col-sm-3">
   <script language="JavaScript">
    Webcam.set({
        width: 300,
        height: 300,
        image_format: 'jpeg',
        jpeg_quality: 600
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


                <input type="text" class="form-control" placeholder="First Name" name="operatorid" hidden>


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
                    <input type="text" class="form-control" placeholder="Address Line 1" name="address1">
                  </div>
                
                
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" name="barangay" required>
                  <option value="" disabled selected>Barangay</option>
                  <option value="APOLLO">APOLLO</option>
                  <option value="BALUT">BALUT</option>
                  <option value="BAYAN">BAYAN</option>
                  <option value="BAGONG PARAISO">BAGONG PARAISO</option>
                  <option value="CALERO">CALERO</option>
                  <option value="CENTRO I">CENTRO I</option>
                  <option value="CENTRO II">CENTRO II</option>
                  <option value="DONA">DOÑA</option>
                  <option value="KABALUTAN">KABALUTAN</option>
                  <option value="KAPARANGAN">KAPARANGAN</option>
                  <option value="MARIA FE">MARIA FE</option>
                  <option value="MASANTOL">MASANTOL</option>
                  <option value="MULAWIN">MULAWIN</option>
                  <option value="PACAR">PACAR</option>
                  <option value="PAGASA">PAGASA</option>
                  <option value="PALIHAN">PALIHAN</option>
                  <option value="PANTALAN BAGO">PANTALAN BAGO</option>
                  <option value="PANTALAN LUMA">PANTALAN LUMA</option>
                  <option value="PARANG PARANG">PARANG PARANG</option>
                  <option value="PUKSUAN">PUKSUAN</option>
                  <option value="SIBUL">SIBUL</option>
                  <option value="SILAHIS">SILAHIS</option>
                  <option value="TAGUMPAY">TAGUMPAY</option>
                  <option value="TALA">TALA</option>
                  <option value="TALIMUNDOC">TALIMUNDOC</option>
                  <option value="TAPULAO">TAPULAO</option>
                  <option value="TENEJERO">TENEJERO</option>
                  <option value="TUGATOG">TUGATOG</option>
                  <option value="WAWA">WAWA</option>
                    </select>
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="contactnum">
                  </div>

                     <div class="col-sm-4">
                       <select class="form-select" aria-label="Default select example" name="gender" required>
                      <option value="" disabled selected>SELECT GENDER</option>
                      <option value="MALE">MALE</option>
                      <option value="FEMALE">FEMALE</option>

                    </select>
                  </div>

                </div>

             


          
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Birth Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="bday">
                  </div>

                   <div class="col-sm-4">
                       <select class="form-select" aria-label="Default select example" name="bloodtype">
                      <option value="" selected>SELECT BLOOD TYPE</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
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
                  <label for="inputTime" class="col-sm-2 col-form-label">TYPE</label>
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="type">
                      <option value="" disabled selected>SELECT TYPE HERE</option>
                      <option value="OPERATOR">OPERATOR</option>
                      <option value="OPERATOR/DRIVER">OPERATOR/DRIVER</option>
                     
                    </select>
                  </div>
                </div>


                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">ID #</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control" placeholder="ID NUMBER" name="licensid">
                  </div>
                    <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="lictype">
                          <option value="" disabled selected>SELECT ID TYPE</option>
                       <option value="COMPANY ID">COMPANY ID</option>
                      <option value="OPERATOR">PROFESSIONAL</option>
                      <option value="OPERATOR/DRIVER">NON-PROFESSIONAL</option>
                     
                      <option value="PASSPORT">PASSPORT</option>
                      <option value="SSS">SSS</option>
                      <option value="GSIS">GSIS</option>
                      <option value="UMID">UMID</option>
                      <option value="PRC">PRC</option>
                      <option value="PNPPNP">PNP</option>
                      <option value="Philippine Postal ID">Philippine Postal ID</option>
                      <option value="National ID">National ID</option>
                      <option value="VOTERS ID">VOTERS ID</option>
                      <option value="SENIOR ID">SENIOR ID</option>
                      <option value="Philhealth ID">Philhealth ID</option>
                    </select>
                  </div>
                  </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">ID Validity</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control"  placeholder="EXPIRATION" name="expiration">
                  </div>
                  </div>

                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>CEDULA</b></label>
                  
                  <div class="col-sm-3">
                   Cedula #
                    <input class="form-control" type="text" name="cedulanumber" placeholder="Cedula #"/>
                  </div>
                   <div class="col-sm-3">
                    Issuance location
                    <input class="form-control" type="text" name="cedulalocation"  placeholder="Issuance location"/>
                  </div>
                  <div class="col-sm-3">
                    Cedula date
                    <input type="date" class="form-control" placeholder="dateofissue" name="ceduladate">
                  </div>
                  </div>


                  <br><!--divider -->
                  <div class="row mb-3">
                     <label for="inputEmail" class="col-sm-12 col-form-label"><font color= "Green"><b>Tricycle Details</b></font></label>
                    </div>

              <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>Classification</b></label>
                  <div class="col-sm-3">
                   
                   <select class="form-select" aria-label="Default select example" required name="classification">
                      <option value="" disabled selected>SELECT CLASSIFICATION</option>
                      <option value="Public">Public Motorized Tricycle for Hire</option>
                      <option value="Utility">Utility Motorized Tricycle</option>
                      <option value="Family">Family-Use Motorized Tricycle</option>
                    </select>
                  </div>
               
                    <div class="col-sm-3">
              
                   <select class="form-select" aria-label="Default select example" required name="toda">
                      <option value="" disabled selected>SELECT TODA</option>
                    <?php
                      $sql = "SELECT `toda` FROM toda";
                       $result = $conn->query($sql);
                      if($result->num_rows> 0){
                         $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                           }
                           foreach ($options as $option) {
  ?>
    <option value="<?php echo $option['toda']; ?>"><?php echo $option['toda']; ?> </option>
    <?php 
    }
                    ?>
                    
                    </select>
                  </div>
                  </div>
                  <br>
 <div class="row mb-6">

 </div>

        <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b> UNIT INFO:</b></label>
                  <div class="col-sm-2">
                   <input class="form-check-input" type="checkbox" id="nounit" name="nounit" value="no unit"><- Check for no unit
                  </div>
                </div>
                <br>

                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>SERIAL NUMBERS:</b></label>
                  <div class="col-sm-2">
                    MV File number
                    <input type="text" class="form-control" name="fileno" placeholder="MV FILE NO." name="fileno" required>
                  </div>
                  <div class="col-sm-2">
                    Plate Number
                    <input type="text" class="form-control" name="plateno" placeholder="Plate Number" name="plateno" required>
                  </div>
                   <div class="col-sm-2">
                    Engine Number
                    <input type="text" class="form-control" name="engineno" placeholder="Engine Number" name="engineno">
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
                    Motor Color
                    <input type="text" class="form-control" name="motorcolor" placeholder="Motor Color">
                  </div>
                  <div class="col-sm-2">
                    Piston Displacement
                    <input type="text" class="form-control" placeholder="Piston Displacement" name="piston">
                  </div>
                   <div class="col-sm-2">
                    Cert. of Reg.
                    <input type="text" class="form-control" placeholder="Certificate of Registration" name="cor">
                  </div>
                   <div class="col-sm-2">
                    Official Receipt No.
                    <input type="text" class="form-control" placeholder="OR" name="ornum">
                  </div>
                  </div>



<br>
                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>Other Details</b></label>
                  <div class="col-sm-3">
                    Parking
                    <input type="text" class="form-control" name="hasparking" placeholder="Parking location" >
                  </div>
                  <div class="col-sm-3">
                    Acquisition date
                    <input type="date" class="form-control" name="acquisitiondate" placeholder="Date">
                  </div>
                  <div class="col-sm-3">
                    Year Model
                    <input type="text" class="form-control" placeholder="____" name="yearmodel" maxlength="4"  min="0" max="9999" step="1"pattern="[0-9]{4}">
                  </div>
                 
                  </div>




<br>

                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>FRANCHISE</b></label>
                  <div class="col-sm-4">
                    Date of Application
                    <input type="date" class="form-control" placeholder="dateofissue" name="applicationdate">
                  </div>
                  <div class="col-sm-1">
                    Brgy #
                    <input class="form-control" type="text" name="brgycode" maxlength="2"  min="0" max="9999" step="1" placeholder="_ _" pattern="[0-9]{2}" style="color:#888;" required/>
                  </div>
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




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">ISSUE FRANCHISE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
    <h5 class="card-title">Grant Franchise, Please insert Application date period:</h5>
<font color="skyblue"> <strong></strong></font>
              <form method="POST" method="POST">
              
<div class="row mb-12">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>FROM:</b></label>
                  <div class="col-sm-4">
                
                    <input type="date" class="form-control" name="startDatePicker"  id="startDatePicker" required>
                  </div>

  <label for="inputEmail" class="col-sm-2 col-form-label"><b>TO:</b></label>
                  <div class="col-sm-4">
                
                    <input type="date" class="form-control" name="endDatePicker"  id="endDatePicker" required>
                  </div>


                </div>

<Br>

<div class="row mb-6">
                  <label for="startDatePicker" class="col-sm-2 col-form-label"><font color="orange"><b>DATE OF FRANCHISE ISSUANCE:</b></label></font>
                  <div class="col-sm-4">
                <Br>
                    <input type="date" class="form-control" name="franchisedate"  id="franchisedate" required>
                  </div>

</div>

</div>



               <div class="modal-footer">
               <button type="submit" name="issuefranchise" class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div></div>
<script>
  
$("#startDatePicker").datepicker({ 
    dateFormat: 'dd-mm-yyyy',
    changeMonth: true,
    minDate: new Date(),
    maxDate: '+2y',
    onSelect: function(date){

        var selectedDate = new Date(date);
        var msecsInADay = 86400000;
        var endDate = new Date(selectedDate.getTime() + msecsInADay);

       //Set Minimum Date of EndDatePicker After Selected Date of StartDatePicker
        $("#endDatePicker").datepicker( "option", "minDate", endDate );
        $("#endDatePicker").datepicker( "option", "maxDate", '+2y' );

    }
});

$("#endDatePicker").datepicker({ 
    dateFormat: 'dd-mm-yyyy',
    changeMonth: true
});
</script>

<?php 


if (isset($_POST['issuefranchise'])) {

  $startDatePicker =$_POST['startDatePicker'];
  $endDatePicker =$_POST['endDatePicker'];
  $franchisedate =$_POST['franchisedate'];

  $franchiseexpiration = date('Y-m-d', strtotime('+3 year', strtotime($franchisedate)));
$sqlfranchise = "UPDATE `tricycle` SET `currentfranchise` = '$franchiseexpiration' WHERE `applicationdate` BETWEEN '$startDatePicker' AND '$endDatePicker' AND `currentfranchise` =''";
 $result = $conn->query($sqlfranchise);
                    if ($conn->affected_rows > 0) {

$sqlfranchiserecord = "UPDATE `franchiserecord` SET `franchiseapproval` = '$franchisedate', `franchiseexpiration` = '$franchiseexpiration' WHERE `franchiseapplication` BETWEEN '$startDatePicker' AND '$endDatePicker'";
 $result = $conn->query($sqlfranchiserecord);
                       if ($conn->affected_rows > 0) {

                        $countt = $conn->affected_rows;
                         echo "<script type='text/javascript'>alert(\"Successfully Updated Franchise Record of $countt  \")</script>";
                                      echo '<script>window.location.href="trikedata.php?filter=all"</script>';


}



}else
  echo "<script type='text/javascript'>alert(\"No application found in the given dates  \")</script>";
  echo '<script>window.location.href="trikedata.php?filter=all"</script>';
                                     

}

?>




                <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl">ADD TRICYCLE DATA </button>

                   <button class="btn btn-warning" type="button" data-toggle="modal"  data-target=".bd-example-modal-lg">ISSUE FRANCHISE</button>
              </div>
              <br></br>

             <table id="tblPeople" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Owner</th>
                <th>Body Number</th>
                <th>Application Date</th>
                <th>Franchise Date</th>
             
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

          <?php
  if ($filter =="all") {
        $sql = "SELECT * FROM `tricycle`";
      } 
  elseif ($filter =="public") {
       $sql = "SELECT * FROM `tricycle` WHERE classification ='public'";
      }
  elseif ($filter =="private") {
       $sql = "SELECT * FROM `tricycle` WHERE classification ='utility' OR classification ='family'";
      }            

    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $fname =$row['fname'];
                            $mname =$row['mname'];
                            $lname =$row['lname'];
                            $brgycode= $row['brgycode'];
                            $bodynum= $row['bodynum'];
                            $operatorid = $row['operatorid'];
                            $applicationdate = $row['applicationdate'];
                            $currentfranchise = $row['currentfranchise'];




 ?>
            <tr>
                <td><?php echo  $id; ?></td>
                <td><?php echo  $lname.", ".$fname." ".$mname; ?></td>
                <td><?php echo  $brgycode."-".$bodynum; ?></td>
                <td><?php echo  $applicationdate; ?></td>
                <td><?php 
                if ($currentfranchise=='0000-00-00') {
                echo  "Franchise pending";
                }else {
                echo  "<font color='skyblue'>".$currentfranchise."</font>";
                } ?>
                  
                </td>
     
                <td>
  <a href="profile.php?id=<?php echo  $id; ?>" target="_blank"><button type='button' class='btn btn-primary btn-sm' >
  <i class="bi bi-card-text"></i></button></a></i>

<!--   <a href="#" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'>
  <i class="bi bi-pencil-fill"></i></button></a></i>

  <a href="#" data-toggle="modal"><button type='button' class='btn btn-danger  btn-sm'>
  <i class="bi bi-trash-fill"></i></button></a></i>
 -->
                </td>
            </tr>
            <?php }} ?>
        </tbody>
        <tfoot>
            <tr>
              <th>ID</th>
                <th>Owner</th>
                <th>Body Number</th>
                <th>Application Date</th>
                <th>Franchise Date</th>
             
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