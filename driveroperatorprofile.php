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

  <title>Tricyclye Management</title>
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
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tricycle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="trikedata.php?filter=all">
              <i class="bi bi-circle"></i><span>All Tricycle Data</span>
            </a>
          </li>
          <li>
            <a href="trikedata.php?filter=public">
              <i class="bi bi-circle"></i><span>Public Tricycle</span>
            </a>
          </li>
           <li>
            <a href="trikedata.php?filter=private">
              <i class="bi bi-circle"></i><span>Private Tricycle</span>
            </a>
          </li>
       </ul>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables2-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Drivers And Operators</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables2-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="driversoperators.php?filter=allops">
              <i class="bi bi-circle"></i><span>Drivers And Operators</span>
            </a>
          </li>
          <li>
            <a href="driversoperators.php?filter=operators">
              <i class="bi bi-circle"></i><span>Operators</span>
            </a>
          </li>
          <li>
           
          </li>
       
       </ul>
        <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-clipboard-data"></i>
          <span>Driver or Operator Profile</span>
        </a>
      </li>
      </li><!-- End Components Nav -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="downloads.php">
          <i class="bi bi-download"></i>
          <span>Downloadables</span>
        </a>
      </li>

    </ul>

     
  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Driver/Operator</li>
          <li class="breadcrumb-item active">Driver or Operator Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <?php
    $doid = $_GET['id'];
 
     $sql = "SELECT * from driveroperator WHERE pid = '$doid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                          $_SESSION['opid'] = $id = $row['pid'];  
                          $_SESSION['opfname'] =  $fname = $row['fname']; 
                          $_SESSION['opmname'] =  $mname = $row['mname']; 
                          $_SESSION['oplname'] =  $lname = $row['lname']; 
                           $_SESSION['gender'] =  $gender = $row['gender']; 
                          $_SESSION['extname'] =  $extname = $row['extname']; 
                          $_SESSION['opaddress1'] =  $address1 = $row['address1']; 
                          $_SESSION['opbarangay'] =  $barangay = $row['barangay']; 
                          $_SESSION['opcontactnumber'] =  $contactnumber = $row['contactnumber']; 
                          $_SESSION['opsfname'] =  $sfname = $row['sfname']; 
                          $_SESSION['opsmname'] =  $smname = $row['smname']; 
                          $_SESSION['opslname'] =  $slname = $row['slaname']; 
                          $_SESSION['opbday'] =  $bday = $row['bday']; 
                          $_SESSION['optype'] = $type = $row['type']; 
                          $_SESSION['oplicensenum'] =  $licensenum = $row['licensenum']; 
                          $_SESSION['oplicensetype'] = $licensetype = $row['licensetype']; 
                          $_SESSION['oplicensevalid'] = $licensevalid = $row['licensevalid']; 
                          $_SESSION['oppicname'] =  $picname = $row['picname'];
                          $_SESSION['cedulanumber'] =  $cedulanumber = $row['cedulanumber']; 
                          $_SESSION['cedulalocation'] =  $cedulalocation = $row['cedulalocation'];  
                          $_SESSION['ceduladate'] =  $ceduladate = $row['ceduladate']; 
                          $_SESSION['bloodtype'] =  $bloodtype = $row['bloodtype']; 
                          $_SESSION['addcheck'] = "driverexist";
                     }
                            



}
     ?>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="upload/<?php echo $picname; ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $fname." ".$mname." ".$lname ; ?></h2>
              <h3><?php echo $type; ?></h3>
              <div class="social-links mt-2">
               <?php  


$oppid =$_GET['id'];


;
if (empty($_GET['bdynum'])) {
   echo "";
}else {
  $_GET['bdynum'];
}

$sql = "SELECT * from tricycle WHERE operatorid =$oppid";
                    $result = $conn->query($sql);
                    $countfranchise = $result ->num_rows;
                    $countcolor = "green";
                    if ($countfranchise ==4) {
                      $countcolor = "red";
                    }

 if ($type =="DRIVER"){
      echo "<center><font color='$countcolor'><b>"."</b></font></center>";
    }else {

      echo "<font color='$countcolor'><b>".$countfranchise."</b></font> Franchise Owned";

    }

                    

               ?>
              </div>
            </div>
          </div>

           <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

             

          <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example2-modal-xl">EDIT PROFILE</button>

          <br>
          <?php 
            $bdynum = $_GET['bdynum']
          ?>
          <a href="pdfid.php?id=<?php echo $oppid ?>&bdynum=<?php echo  $bdynum;?>">
           <button class="btn btn-primary" type="button">Print ID</button></a>
            </div>
          </div>



        </div>

<div class="modal fade bd-example2-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">EDIT PROFILE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>


            </div>
     
















  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Driver / Operator</h5>

              <!-- General Form Elements -->
         <form method="POST">
              

  
  
          
          
 
<!-- simple here configuration part a few settings and attach camera -->

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

                  <div class="col-md-4">
               <center> <div id>
                  Current Picture
                  <img src="upload/<?php echo $picname; ?>">/

               </div></center>

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




                <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">NAME</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" required value="<?php echo $fname; ?>">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required value="<?php echo $lname; ?>">
                  </div>
                   <div class="col-sm-1">
                    <input type="text" class="form-control" placeholder="Jr./Sr." name="xname" value="<?php echo $extname; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Address Line 1" name="address1" value="<?php echo $address1; ?>">
                  </div>
                
                
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" name="barangay" required>
                      <option value="<?php echo $barangay; ?>" selected><?php echo $barangay; ?>
                    </option>
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
                  <option value="Hemosa">Hemosa</option>
                  <option value="Samal">Samal</option>
                    </select>
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="contactnum" value="<?php echo $contactnumber; ?>">
                  </div>


                   <div class="col-sm-4">
                       <select class="form-select" aria-label="Default select example" name="gender" required>
                     <option value="<?php echo $gender; ?>" selected><?php echo $gender; ?></option>
                      <option value="MALE">MALE</option>
                      <option value="FEMALE">FEMALE</option>

                    </select>
                  </div>
                </div>

                  <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">Name Of Spouse</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First Name" name="sfname" value="<?php echo $sfname; ?>">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Middle Name" name="smname" value="<?php echo $smname; ?>">
                  </div>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="slname" value="<?php echo $slname; ?>">
                  </div>
                 
                </div>


          
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Birth Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="bday"  value="<?php echo $bday; ?>">
                  </div>

                   <div class="col-sm-4">
                       <select class="form-select" aria-label="Default select example" name="bloodtype">
                       <option value="<?php echo $bloodtype; ?>" selected><?php echo $bloodtype; ?>
                       <option value="-">-</option>
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

                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">TYPE</label>
                  <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="type">
                      <option value="<?php echo $type; ?>" selected><?php echo $type; ?>
                      <option value="OPERATOR">OPERATOR</option>
                      <option value="OPERATOR/DRIVER">OPERATOR/DRIVER</option>
                      
                    </select>
                  </div>
                </div>


                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control" placeholder="LICENSE NUMBER" name="licensid"  value="<?php echo $licensenum; ?>">
                  </div>
                    <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="lictype">
                      <option value="<?php echo $licensetype; ?>" selected><?php echo $licensetype; ?>
                      
                      <option value="COMPANY ID">COMPANY ID</option>
                      <option value="PROFESSIONAL">PROFESSIONAL</option>
                      <option value="NON-PROFESSIONAL">NON-PROFESSIONAL</option>
                     
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
                      <option value="BIR ID">BIR ID</option>
                      <option value="Philhealth ID">Philhealth ID</option>
                    </select>
                  </div>
                  </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License Validity</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" placeholder="EXPIRATION" name="expiration" value="<?php echo $licensevalid; ?>">
                  </div>
                  </div>

                   <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>CEDULA</b></label>
                  
                  <div class="col-sm-3">
                   Cedula #
                    <input class="form-control" type="text" name="cedulanumber" placeholder="Cedula #" value="<?php echo $cedulanumber; ?>"/>
                  </div>
                   <div class="col-sm-3">
                    Issuance location
                    <input class="form-control" type="text" name="cedulalocation" placeholder="Issuance location" value="<?php echo $cedulalocation; ?>"/>
                  </div>
                  <div class="col-sm-3">
                    Cedula date
                    <input type="date" class="form-control" placeholder="dateofissue" name="ceduladate" value="<?php echo $ceduladate; ?>">
                  </div>
                  </div>
            
             <!-- End General Form Elements -->

            </div>
          </div>

        </div>
</div></section>



          <div class="modal-footer">
               <button type="submit" name="editprofile"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>
<?php 
 if(isset($_POST['editprofile'])){

  $img = $_POST['image'];
    $folderPath = "upload/";
  
    $fetch_imgParts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $fetch_imgParts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($fetch_imgParts[1]);
 $img_name = uniqid() . '.jpeg';
  
    $file = $folderPath . $img_name;
    file_put_contents($file, $image_base64);
  
  
  

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$xname = $_POST['xname'];
$gender = $_POST['gender'];
$address1 = $_POST['address1'];
$barangay = $_POST['barangay'];
$contactnum = $_POST['contactnum'];
$bday = $_POST['bday'];
$sfname = $_POST['sfname'];
$smname = $_POST['smname'];
$slname = $_POST['slname'];
$type = $_POST['type'];
$licensid = $_POST['licensid'];
$licensetype = $_POST['lictype'];
$expiration = $_POST['expiration'];
$cedulanumber = $_POST['cedulanumber'];
$cedulalocation = $_POST['cedulalocation'];
$ceduladate = $_POST['ceduladate'];
$bloodtype = $_POST['bloodtype'];
if ($img =="") {
$editpic = $picname;
}else {

  $editpic   = $img_name;
}

$sql = "UPDATE `driveroperator` SET `fname` = '$fname', `mname` = '$mname', `lname` = '$lname', `gender` = '$gender', `extname` = '$xname', `address1` = '$address1', `barangay` = '$barangay', `contactnumber` = '$contactnum', `sfname` = '$sfname', `smname` = '$smname', `slaname` = '$slname', `bday` = '$bday', `type` = '$type', `licensenum` = '$licensid', `licensetype` = '$licensetype', `licensevalid` = '$expiration', `picname` = '$editpic',`cedulanumber` = '$cedulanumber', `cedulalocation` = '$cedulalocation', `ceduladate` = '$ceduladate', `bloodtype` = '$bloodtype' WHERE `driveroperator`.`pid` =  $doid";

if ($conn->query($sql) === TRUE) {  
 
 $last_id = $conn->insert_id;

 echo "<script type='text/javascript'>alert(\"Successfully Edited\")</script>";
           echo "<script>window.location.href='driveroperatorprofile.php?id=$doid&bdynum=$bdynum'</script>"; 
         }  else{
             echo "<script type='text/javascript'>alert(\"Data not added please check.  \")</script>";

}
}


?>



        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-inspection">Violations</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-transactions">Transactions</button>
                </li>

              

              </ul>
              <div class="tab-content pt-2">

                          
              

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title"><?php echo $type." Profile";?></h5>
                  <p class="small fst-italic">Below are the details for the selected <?php echo $type?> </p>

                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $address1.", ".$barangay; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $contactnumber; ?></div>
                  </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Birthday</div>
                    <div class="col-lg-9 col-md-8"><?php echo date('F-d-Y',strtotime($bday)); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">License Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $licensenum; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">License Type</div>
                    <div class="col-lg-9 col-md-8"><?php echo $licensetype; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">License Expiration</div>
                    <div class="col-lg-9 col-md-8">
<?php
//Check if licensed Expired
$date = new DateTime($licensevalid);
$now = new DateTime();

if($date < $now) {
   echo "<font color=red>".date('F-d-Y',strtotime($licensevalid))."</font>";
}else{
  echo "<font color=green>".date('F-d-Y',strtotime($licensevalid))."</font>";
}  ?>
                   
                
                     

                    </div>
                  </div>

               

                 

                </div>



                  <div class="tab-pane fade profile-overview" id="profile-inspection">
                  <h5 class="card-title">VIOLATIONS</h5>
                  <p class="small fst-italic">THIS SECTION IS UNDER DEVELOPMENT</p>

                  <h5 class="card-title">....</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">THIS SECTION IS UNDER DEVELOPMENT</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                 
                  


                 

                </div>



                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="USA">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-transactions">

                  <!-- Settings Form -->
                  <form>

                  <div class="col-md-8 col-lg-9">
                  <h5 class="card-title">Transactions History</h5>
                  <p class="small fst-italic">-----------------------</p>
                  <p class="small fst-italic">-----------------------</p>

                  </form><!-- End settings Form -->
</div>
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

         

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php if ($type =="DRIVER"){
      echo "<section class='section' hidden>";
    }
    
else{
 echo "<section class='section'>";
}
      ?>

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">OWNED FRANCHISE</h5>
          

<!-- Extra large modal EXISTING -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Add Franchise</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

     

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Franchise</h5>

              <!-- General Form Elements -->
         <form method="POST" action="do_upload.php">


            
            
           
                  <br><!--divider -->
                  <div class="row mb-3">
                     <label for="inputEmail" class="col-sm-12 col-form-label"><font color= "Green"><b>Tricycle Details</b></font></label>
                    </div>
  <input type="text" class="form-control"  name="fname" hidden value="<?php echo $fname; ?>">  <input type="text" class="form-control"  name="mname" hidden value="<?php echo $mname; ?>">
  <input type="text" class="form-control" name="lname" hidden value="<?php echo $lname; ?>">  <input type="text" class="form-control" name="xname" hidden value="<?php echo $extname; ?>">
   <input type="text" class="form-control" name="operatorid" hidden value="<?php echo $id; ?>">
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

                    <script>
            $(document).ready(function(){

                $("#bdynumber").keyup(function(){

                    var username = $(this).val().trim();
            
                    if(username != ''){
            
                       
            
                        $.ajax({
                            url: 'ajaxfile.php',
                            type: 'post',
                            data: {username: username},
                            success: function(response){
                
                                $('#uname_response').html(response);
                
                             }
                        });
                    }else{
                        $("#uname_response").html("");
                    }
            
                });

            });
        </script>

                    Body Number
                    <input class="form-control" type="text" id="bdynumber" name="bdynumber" maxlength="4"  min="0" max="9999" step="1" placeholder="_ _ _ _" pattern="[0-9]{4}" style="color:#888;" required/>
                      <div id="uname_response"></div>
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
                <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl" <?php if ($countfranchise == 4) {
                  echo "disabled";
                } ?> >
                ADD NEW FRANCHISE </button>

               
              </div>
              <br></br>

             <table id="tblPeople" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                
                <th>BODY #</th>
                <th>FRANCHISE DATE</th>
                <th>CLASSIFICATION</th>
                <th>TODA</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php



$oppid =$_GET['id'];

$sql = "SELECT * from tricycle WHERE operatorid =$oppid";
                    $result = $conn->query($sql);
                    $count  = $result->num_rows;
                    if ($result->num_rows > 0) {
                  
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];  
                            $bdynumber = $row['bodynum']; 
                            $applicationdate = $row['applicationdate']; 
                            $classification = $row['classification']; 
                            $toda = $row['toda']; 










?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $bdynumber; ?></td>
                <td><?php echo $applicationdate; ?></td>
                <td><?php echo $classification; ?></td>
                <td><?php echo $toda; ?></td>
                <td>
  <a href="profile.php?id=<?php echo  $id; ?>"><button type='button' class='btn btn-primary btn-sm'>
  <i class="bi bi-card-text"></i></button></a></i>

 
  <a href="#delete<?php echo $tbldriversid;?>" data-toggle="modal"><button type='button' class='btn btn-danger  btn-sm'>
  <i class="bi bi-trash-fill"></i></button></a></i>
                </td>
            </tr>




  <div id="delete<?php echo $tbldriversid; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Delete</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $tbldriversid; ?>">
                                         <input type="hidden" name="profileid" value="<?php echo $tid; ?>">

                                        <div class="alert alert-danger">Are you sure you want Remove <b><?php echo $dfname." ".$dlname; ?></b> as a driver in this tricycle <strong>
                                                <?php echo $item_name; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>












            <?php }}
 if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                              $profileid = $_POST['profileid'];
                            $sql = "DELETE FROM drivers     WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM drivers WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM drivers WHERE id='$delete_id' ";
                                    echo "<script type='text/javascript'>alert(\"Successfully Removed  \")</script>";
                                      echo '<script>window.location.href="profile.php?id='.$profileid.'"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }




             ?>
        </tbody>
        <tfoot>
            <tr>
             <th>ID</th>
                
                 
                <th>BODY #</th>
                <th>FRANCHISE DATE</th>
                <th>CLASSIFICATION</th>
                <th>TODA</th>
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


 <?php if ($type !="DRIVER"){
      echo "<section class='section' hidden>";
    }else {

      echo "<section class='section'>";


    }

    ?>


   <div class="row">
    <div class="card">
        <div class="col-lg-12">
 <h5 class="card-title">List of Driven Tricycle</h5>
            
             <table id="tbldriver" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                
                <th>BODY #</th>
                <th>OPERATOR</th>
        
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php



$driverid =$_GET['id'];

$sql = "SELECT 
tricycle.brgycode, 
tricycle.bodynum, 
tricycle.fname, 
tricycle.mname,
tricycle.lname,
tricycle.id 
FROM drivers JOIN tricycle ON drivers.trikeid = tricycle.id WHERE drivers.driverid = $driverid";
                    $result = $conn->query($sql);
                    $count  = $result->num_rows;
                    if ($result->num_rows > 0) {
                  
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $trikeid = $row['id'];
                            $bdynumber = $row['bodynum']; 
                            $brgycode = $row['brgycode'];
                            $operatorfname=$row['fname'];
                            $operatormname = $row['mname'];
                            $operatorlname = $row['lname'];

                           $fullbodynumber = $brgycode."-".$bdynumber;
?>
            <tr>
                <td><?php echo $trikeid; ?></td>
                <td><?php echo $brgycode."-".$bdynumber ; ?></td>
                <td><?php echo $operatorfname." ".$operatormname." ".$operatorlname ; ?></td>
              
                <td>
  <a href="profile.php?id=<?php echo  $trikeid; ?>"><button type='button' class='btn btn-primary btn-sm'>
  <i class="bi bi-card-text"></i></button></a></i>
<a href="pdfid.php?id=<?php echo $driverid ?>&bdynum=<?php echo  $fullbodynumber;?>"><button type='button' class='btn btn-warning btn-sm'>
  <i class="bi bi-printer"></i></button></a></i>
 
                </td>
            </tr>

<?php }} ?>

    </tbody>
        <tfoot>
            <tr>
             
           <th>ID</th>
                
                <th>BODY #</th>
                <th>OPERATOR</th>
        
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </div></div></div>
    </section>










<?php

if (isset($_POST['savedriver'])) {
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $fetch_imgParts = explode("base64", $img);
    $image_type_aux = explode("image/", $fetch_imgParts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($fetch_imgParts[1]);
    $img_name = uniqid() . '.png';
  
    $file = $folderPath . $img_name;
    file_put_contents($file, $image_base64);
  

  

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$xname = $_POST['xname'];
$address1 = $_POST['address1'];
$barangay = $_POST['barangay'];
$contactnum = $_POST['contactnum'];
$bday = $_POST['bday'];
$sfname = $_POST['sfname'];
$smname = $_POST['smname'];
$slname = $_POST['slname'];
$type = $_POST['type'];
$licensid = $_POST['licensid'];
$licensetype = $_POST['lictype'];
$expiration = $_POST['expiration'];


$sql = "INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `extname`, `address1`, `barangay`,`contactnumber`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`,`picname`) VALUES 
  (NULL, '$fname', '$mname', '$lname', '$xname', '$address1', '$barangay','$contactnum', '$sfname', '$smname', '$slname', '$bday', '$type', '$licensid', '$licensetype', '$expiration', '$img_name')";

if ($conn->query($sql) === TRUE) {  

 $last_id = $conn->insert_id;
$sql = "INSERT INTO `drivers` (`id`, `bdynumber`, `trikeid`, `driverid`) VALUES (NULL, '$bodynum', '$tid', '$last_id')";

if ($conn->query($sql) === TRUE) {  


 echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='profile.php?id=$tid'</script>"; 

}

}
}

 ?>


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

<script>
jQuery(document).ready(function($) {
    $('#tbldriver').DataTable();
} );
</script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</body>

</html>