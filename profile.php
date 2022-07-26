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

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
          <li>
            <a href="droppedunits.php?filter=">
              <i class="bi bi-circle"></i><span>DROPPED UNITS</span>
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
          <span>Tricycle Profile</span>
        </a>
      </li>
      </li><!-- End Components Nav -->


    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>SHOWING DATA OF TRICYCLE</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tricycle</li>
          <li class="breadcrumb-item active">Tricycle Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <?php
    $tid = $_GET['id'];
   
   
     $sql = "SELECT
  tricycle.id,
  tricycle.bodynum,
  tricycle.mvfileno,
  tricycle.plateno,
  tricycle.engineno,
  tricycle.chasisno,
  tricycle.maker,
  tricycle.motorcolor,
  tricycle.pistondisp,
  tricycle.cor,
  tricycle.ornum,
  tricycle.applicationdate,
  tricycle.brgycode,
  tricycle.toda, 
  tricycle.sidecarcolor,
  tricycle.classification,  
  tricycle.bodynum, 
  tricycle.inspectionstat,
  tricycle.currentfranchise,
  tricycle.status,
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname, 
  driveroperator.lname, 
  driveroperator.type,
  driveroperator.picname,
  inspection.sidecar_windshield,
  inspection.funcitioning_horn,
  inspection.signal_lights,
  inspection.tail_lights,
  inspection.topchain_cover,
  inspection.whitered_headlights,
  inspection.light_inside,
  inspection.mufflers,
  inspection.roof,
  inspection.side_mirrors,
  inspection.upholstery,
  inspection.wheels,
  inspection.remarks

FROM tricycle
JOIN driveroperator
ON tricycle.operatorid = driveroperator.pid
JOIN inspection
ON tricycle.id = inspection.trikeid WHERE tricycle.id = '$tid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $editid = $row['id']; 
                            $id = $row['id'];  
                            $bodynum = $row['bodynum']; 
                            $mvfileno = $row['mvfileno']; 
                            $plateno = $row['plateno']; 
                            $chasisno = $row['chasisno']; 
                            $engineno = $row['engineno']; 
                            $maker = $row['maker']; 
                            $pistondisp = $row['pistondisp']; 
                            $cor = $row['cor']; 
                            $ornum = $row['ornum']; 
                            $applicationdate = $row['applicationdate']; 
                            $editapplicationdate = $row['applicationdate']; 
                            $brgycode = $row['brgycode']; 
                            $bodynum = $row['bodynum'];
                            $pid = $row['pid'];  
                            $fname = $row['fname']; 
                            $mname = $row['mname']; 
                            $lname = $row['lname']; 
                            $type = $row['type']; 
                            $picname = $row['picname']; 
                            $toda = $row['toda']; 
                            $sidecarcolor = $row['sidecarcolor']; 
                            $sidecar_windshield = $row['sidecar_windshield'];
                            $funcitioning_horn = $row['funcitioning_horn'];
                            $signal_lights = $row['signal_lights'];
                            $tail_lights = $row['tail_lights'];
                            $topchain_cover = $row['topchain_cover'];
                            $whitered_headlights = $row['whitered_headlights'];
                            $light_inside = $row['light_inside'];
                            $mufflers = $row['mufflers'];
                            $roof = $row['roof'];
                            $side_mirrors = $row['side_mirrors'];
                            $upholstery = $row['upholstery'];
                            $wheels = $row['wheels'];
                            $remarks = $row['remarks'];
                            $currentfrachise = $row['currentfranchise'];
                            $trikestatus = $row['status'];
                            $trikeclassification = $row['classification'];
                            $motorcolor = $row['motorcolor'];





}}
     ?>

    <section class="section profile">
      <div class="row">
      
     <?php
                     $tid = $_GET['id'];
                     $sqlmtop = "SELECT * FROM `mtop` WHERE trikeid ='$tid' and `mtopexpiration` > now()";
                    $results = $conn->query($sqlmtop);
                    if ($results->num_rows > 0) {
                        // output data of each row
                      $mtopstat = 'mtopvalid';
                        while($row = $results->fetch_assoc()) {

                          $mtopexpiration = $row['mtopexpiration'];
                     }}else{
                         $sqlmtop = "SELECT * FROM `mtop` WHERE trikeid ='$tid' ORDER BY id DESC limit 1;";
                        $resultss = $conn->query($sqlmtop);
                          if ($resultss->num_rows > 0) {
                        // output data of each row
                      $mtopstat = 'mtopexpired';
                        while($row = $resultss->fetch_assoc()) {
                             $mtopexpiration = $row['mtopexpiration'];
                     }}else{
                        $mtopexpiration = '';
                      $mtopstat = 'mtopexpired';
                      
                     }}
                          ?>
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-inspection">Inspection</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-transactions">Transactions</button>

                </li>




                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-<?php echo $mtopstat; ?>"<?php if($trikestatus=="dropped"){echo "hidden";}?> >MTOP</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-units">Units</button>
                </li>


                 <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" hidden>Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">


                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tricycle Details</h5>
                  <p class="small fst-italic">Below are the details for the selected tricycle</p>

                  <h5 class="card-title"><?php echo $toda; ?> | <?php echo $brgycode."-".$bodynum; ?></h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">MV File No.</div>
                    <div class="col-lg-9 col-md-8"><?php echo $mvfileno; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Plate Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $plateno; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Engine Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $engineno; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Chasis Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $chasisno; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Sidecar Color</div>
                    <div class="col-lg-9 col-md-8"><font color="<?php echo $sidecarcolor; ?>"><?php echo $sidecarcolor; ?></font></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Franchise Date</div>
                    <div class="col-lg-9 col-md-8"><?php echo $currentfrachise; ?></div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">MTOP Date</div>
                    <div class="col-lg-9 col-md-8"><?php echo $mtopexpiration; ?></div>
                  </div> 
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label" <?php if ($trikestatus == "no unit") {
  echo "hidden";
} ?>><a href="#printconfirmation<?php echo $tid;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-lg'>
                      <i class="bi bi-printer"></i> PRINT CONFIRMATION</button></a></i></div>
                  
                  </div> 
                   <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                    </div>
                  
                  </div> 


               <div class="row"> 
<div class="col-lg-3 col-md-4 label"><button type='button' class='btn btn-warning btn-lg' data-toggle="modal"  data-target=".bd-addnewunit-modal-xl" <?php if ($trikestatus != "no unit") {
  echo "hidden";
} ?>>
  <i class="bi bi-pencil-square"></i> Add New Unit</button></a></i></div>


<div class="col-lg-3 col-md-4 label"><a href="#adddropunit" data-toggle="modal"><button type='button' class='btn btn-success btn-lg' <?php if ($trikestatus!="no unit") {
          echo "hidden";
          # code...
        } ?> >
  <i class="bi bi-plus-circle-fill"></i> ADD DROPPED UNIT</button> </a></i></div>
                    
            
 </div> 
                </div>



                  <div class="tab-pane fade profile-overview" id="profile-inspection">
                  <h5 class="card-title">Tricycle Details</h5>
                  <p class="small fst-italic">Below are the details for the selected tricycle</p>
                  <form method="post">
                  <h5 class="card-title"><?php echo $toda; ?> - <?php echo $bodynum; ?></h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Sidecar Windshield</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="sidecar_windshield" value="OK" <?php if ($sidecar_windshield == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>

                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Functioning Horn</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="funcitioning_horn" value="OK" <?php if ($funcitioning_horn   == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>

                  </div>
                 <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Signal Lights</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="signal_lights" value="OK" <?php if ($signal_lights   == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>

                  </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tail Lights</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="tail_lights" value="OK" <?php if ($tail_lights  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Topchain Cover</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="topchain_cover" value="OK" <?php if ($topchain_cover  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>

                 <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Withered Headlights</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="whitered_headlights" value="OK" <?php if ($whitered_headlights  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Lights Inside</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="light_inside" value="OK" <?php if ($light_inside  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Mufflers</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="mufflers" value="OK" <?php if ($mufflers  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Side Mirrors</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="side_mirrors" value="OK" <?php if ($side_mirrors  == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Upholstery</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="upholstery" value="OK" <?php if ($upholstery == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Wheels</div>
                    <div class="col-lg-9 col-md-8">

                       <input class="form-check-input" type="checkbox" id="chck1" name="wheels" value="OK" <?php if ($wheels   == "OK"): ?>
                          <?php echo  "checked" ?>
                       <?php endif ?>>
                      </div>
                  </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Remarks</div>
                    <div class="col-lg-5 col-md-5">

                      <textarea name="remarks" rows="4" cols="50" class="form-control" value="<?php echo $remarks; ?>" maxlength="100"><?php if($remarks != "") {
                         echo $remarks;
                        } ?></textarea>
                     
                    
                      </div>
                  </div>

                   <div class="row">
                    <div class="col-lg-3 col-md-4 label ">
                    <button class="btn btn-primary" name="updateinspection" type="submit">Update Inspection</button>
                    </div>
                    <div class="col-lg-5 col-md-5">
                      </div>
                  </div>
                    </form>
                  


                 

                </div>
                <?php
                 $editidinspection = $_GET['id'];
                if(isset($_POST['updateinspection'])){



                            $sidecar_windshield = $_POST['sidecar_windshield'];
                            $funcitioning_horn = $_POST['funcitioning_horn'];
                            $signal_lights = $_POST['signal_lights'];
                            $tail_lights = $_POST['tail_lights'];
                            $topchain_cover = $_POST['topchain_cover'];
                            $whitered_headlights = $_POST['whitered_headlights'];
                            $light_inside = $_POST['light_inside'];
                            $mufflers = $_POST['mufflers'];
                            $roof = $_POST['roof'];
                            $side_mirrors = $_POST['side_mirrors'];
                            $upholstery = $_POST['upholstery'];
                            $wheels = $_POST['wheels'];
                            $remarks = $_POST['remarks'];

                            $sql = "UPDATE `inspection` SET `sidecar_windshield` = '$sidecar_windshield', `funcitioning_horn` = '$funcitioning_horn', `signal_lights` = '$signal_lights', `tail_lights` = '$tail_lights', `topchain_cover` = '$topchain_cover', `whitered_headlights` = '$whitered_headlights', `light_inside` = '$light_inside', `mufflers` = '$mufflers', `roof` = '$roof', `side_mirrors` = '$side_mirrors', `upholstery` = '$upholstery', `wheels` = '$wheels', `remarks` = '$remarks' WHERE `inspection`.`trikeid` = $editidinspection";


                            if ($conn->query($sql) === TRUE) {  

  $sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Updated Inspection Details', 'Updated Inspection Details', now(), 'done', '', '$editidinspection')";
if ($conn->query($sql) === TRUE) {  


  echo "<script type='text/javascript'>alert(\"Successfully Edited $editidinspection \")</script>";

   echo '<script>window.location.href="profile.php?id='.$editidinspection.'"</script>';
                                      
}}}
  




                ?>



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
                	 <div class="col-md-8 col-lg-9">

                  <!-- Settings Form -->
                  <form>
                  	 <h5 class="card-title">Transactions History</h5>
                  	 <?php
                  	 $tid = $_GET['id'];
                  	 $sql33 = "SELECT * from transactions where trikeid =$tid ORDER BY id DESC limit 15";
                    $result = $conn->query($sql33);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];  
                            $transaction = $row['transaction']; 
                            $transactdate = $row['date']; 
                            $status = $row['status'];

?>
                 
                 
                  <p class="small fst-italic"><?php echo $transaction." --- ".$transactdate;?></p>
                

<?php }}  

 ?>
                  </form></div></div>





 <div class="tab-pane fade pt-3" id="profile-units">
                   <div class="col-md-8 col-lg-12">

                  <!-- Settings Form -->
                  <form>
                     <h5 class="card-title">Unit History</h5>
                     

                      <table id="tblPeople2" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>File No.</th>
                <th>Plate No.</th>
                <th>Engine No.</th>
                <th>Chasis No.</th>
                <th>Maker</th>
                <th>Motor Color</th>
                <th>Piston Dip</th>
                <th>Drop Date</th>
                <th>Dropped By</th>
                <th>Printables</th>
            </tr>
        </thead>
        <tbody><?php
$getprofileid = $_GET['id'];
       
          $sql = "SELECT * from dropped where trikeid = $getprofileid";
      
    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                            $dropid = $row['dropid'];  
                            $dmvfileno = $row['dmvfileno']; 
                            $dplateno = $row['dplateno']; 
                            $dengineno = $row['dengineno']; 
                            $dchasisno = $row['dchasisno']; 
                            $dmaker = $row['dmaker']; 
                            $dmotorcolor = $row['dmotorcolor']; 
                            $dpistondisp = $row['dpistondisp']; 
                            $dcor = $row['dcor']; 
                            $dropdate = $row['dropdate']; 
                            $trikeid = $row['trikeid']; 
                          
                    ?> 
      
            <tr>
                <td><?php echo $dropid; ?></td>
                <td><?php echo $dmvfileno; ?></td>
                <td><?php echo $dplateno; ?></td>
                <td><?php echo $dengineno; ?></td>
                <td><?php echo $dchasisno;?></td>
                <td><?php echo $dmaker;?></td>
                <td><?php echo $dpistondisp;?></td>
                <td><?php echo $dcor;?></td>
                <td><?php echo $dropdate;?></td>
                <td><?php echo $fname;?></td>
                   <td>

                    <a href="#printnorecord<?php echo $dropid;?>" data-toggle="modal">
<button type='button' class='btn btn-warning btn-sm' <?php if ($trikestatus != "no unit") {echo "hidden";} ?>> <i class="bi bi-printer"></i>NO RECORD</button></a>
                     

                   </td>

            </tr>

</form>

<div id="printnorecord<?php echo $dropid;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        <form method="post"> <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Generate No record Cert.</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="dropid" value="<?php echo $dropid; ?>">
                

                                        <div class="alert alert-warning">Please Input OR number for<strong>
                                                <?php echo $fname." ".$lname."</strong>  with Body Number: "."<strong>".$bodynum."</strong>"; ?></div>

                                        <input type="text" name="norecordcert" class="form-control" placeholder="OR NUMBER" required>
                                        <div class="modal-footer">
                                           <button type="submit" name="printnorecord" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>




            <?php 





          }}?>
        </tbody>
        <tfoot>
            <tr>
               <th>ID</th>
                <th>File No.</th>
                <th>Plate No.</th>
                <th>Engine No.</th>
                <th>Chasis No.</th>
                <th>Maker</th>
                <th>Motor Color</th>
                <th>Piston Dip</th>
                <th>Drop Date</th>
                <th>Dropped By</th>
                <th>Printables</th>
            </tr>
        </tfoot>
    </table>
                  </div></div>



















<?php 

if ($mtopexpiration =='') {
 $mtopexpformatted = "No record";
}else{

  $mtopexpformatted = date('F-d-Y', strtotime($mtopexpiration));
}
 ?>


                   <div class="tab-pane fade pt-3" id="profile-mtopvalid">
                      <h5 class="card-title">MTOP IS UP TO DATE UNTIL: <font color="green"><?php echo $mtopexpformatted; ?></font></h5>

                   </div>




                <div class="tab-pane fade pt-3" id="profile-mtopexpired">
                    <h5 class="card-title">MTOP LAST Registration:  <font color="red"><?php echo $mtopexpformatted;  ?></font> </h5>
                  <!-- Change Password Form -->
                  <form method="POST">

                   <div class="row mb-3">
                 
                  <div class="col-sm-10">

 <?php
                     $tid = $_GET['id'];
                     $sql33 = "SELECT * from mtopamount where id = '1'";
                    $result = $conn->query($sql33);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                          $mtopfee = $row['mtopfee'];
                          $annualstickerfee = $row['annualstickerfee'];
                          $mtopplatefee = $row['mtopplatefee'];
                          $operatoridfee = $row['operatoridfee'];
                          $driveridfee = $row['driveridfee'];
                          $parkingfee = $row['parkingfee'];
                          $droppingfee = $row['droppingfee'];
                          $confirmationfee = $row['confirmationfee'];
                          $certificationofnorecordfee = $row['certificationofnorecordfee'];
                          $transferfee = $row['transferfee'];
                          $farematrix = $row['farematrix'];
                          $bodynumberstickerfee = $row['bodynumberstickerfee'];
                          $environmentalfee = $row['environmentalfee'];


                   }}

?>
                        
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="chck1" name="mtopfee" checked onclick="return false;" value="<?php echo $mtopfee; ?>">
                      <label class="form-check-label" for="gridCheck1" id="text">
                      MTOP 
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label" for="gridCheck1" id="text">
                      <?php echo $mtopfee ?>
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="sticekerfee"  onclick="annualsticker()" name="annualstickerfee" value="<?php echo $annualstickerfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       STICKER FEE
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="sticekerfeeamount" >
                    
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="plate"  onclick="mtopplate()" name="mtopplatefee" value="<?php echo $mtopplatefee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       MTOP PLATE
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="plateamount">
                     
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="operatoridfee"  onclick="funcoperatoridfee()" name="operatoridfee" value="<?php echo $operatoridfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Operator's ID Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <label class="form-check-label" for="gridCheck2" id="operatoridamount">
                     
                      </label>
                    </div>


                      <div class="form-check">
                        <label class="form-check-label" for="gridCheck2" >
                       Driver's ID Fee
                      </label><br>
                      <input class="form-check-input" type="checkbox" id="driveridfee"  onclick="funcdriveridfee()" name="driveridfee" value="<?php echo $driveridfee; ?>">

<input class="col-md-2" type="number" id="driveridfeecount" name="driveridfeecount" size="4">
<input class="col-md-2" type="number" id="getdriveramount1" name="getdriveramount" size="4" hidden>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      <label class="form-check-label" for="gridCheck2" id="driveridfeeamount">
                     
                      </label>
                    </div>


                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="parkingfee"  onclick="funcparkingfee()" name="parkingfee" value="<?php echo $parkingfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Parking Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="parkingfeeamount">
                     
                      </label>
                    </div>


                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="droppingfee"  onclick="funcdroppingfee()" name="droppingfee" value="<?php echo $droppingfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Dropping Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="droppingfeeamount">
                     
                      </label>
                    </div>


                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="confirmationfee"  onclick="funcconfirmationfee()" name="confirmationfee" value="<?php echo $confirmationfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Confirmation Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="confirmationfeeamount">
                     
                      </label>
                    </div>

                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="certificationofnorecordfee"  onclick="funccertificationofnorecordfee()" name="certificationofnorecordfee" value="<?php echo $certificationofnorecordfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Cert. Of No  Record
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="certificationofnorecordfeeamount">
                     
                      </label>
                    </div>




                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="transferfee"  onclick="functransferfee()" name="transferfee" value="<?php echo $transferfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Transfer Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="transferfeeamount">
                     
                      </label>
                    </div>


                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="farematrix"  onclick="funcfarematrix()" name="farematrix" value="<?php echo $farematrix; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Fare Matrix
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="farematrixamount">
                     
                      </label>
                    </div>

                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="bodynumberstickerfee"  onclick="funcbodynumberstickerfee()" name="bodynumberstickerfee" value="<?php echo $bodynumberstickerfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Body Sticker
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="bodynumberstickerfeeamount">
                     
                      </label>
                    </div>



                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="environmentalfee"  onclick="funcenvironmentalfee()" name="environmentalfee" value="<?php echo $environmentalfee; ?>">
                      <label class="form-check-label" for="gridCheck2" >
                       Environmental Fee
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="form-check-label" for="gridCheck2" id="environmentalfeeamount">
                     
                      </label>
                    </div>


                      
                    <div class="form-row">
                        
                      <label class="form-check-label" for="gridCheck2" >
                       MTOP DATE
                      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                      <label class="form-check-label" for="gridCheck2" id="driveridamount">
                     
                      </label>
                       <div class="col-md-2">
                       <input type="date" class="form-control" value ="<?php echo date('dd-mm-yyy'); ?>" name="mtopdate" style="height: 75%" min ="0" max="5" required></div>
                    </div>



<div> 
<br>

 <label class="form-check-label"><b>
  TOTAL: &nbsp;&nbsp;&nbsp;&nbsp;</b>
                     
                      </label>

                  <font color="blue">    <label class="form-check-label"  id="total">
                     
                      </label></font>
</div>                    


<br><br>
 <a href="#mtop<?php echo $tid;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-lg'>
  <i class="bi bi-printer"></i>ADD MTOP</button></a></i>
                  </div>

                </div>

                    
  <div id="mtop<?php echo $tid;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                       <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">ADD MTOP</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="pid" value="<?php echo $tid; ?>">
                

                                        <div class="alert alert-info">Are you sure you want to issue MTOP to the franchise of <strong>
                                                <?php echo $fname." ".$lname."</strong>  with Body Number: "."<strong>".$bodynum."</strong>"; ?>? </div>
                                        <div class="modal-footer">
                                           <button type="submit" name="addmtop" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>





                  </form><!-- End Change Password Form -->

          <script type="text/javascript">
var total = document.getElementById("total");
let totalamount = 200;
document.getElementById("total").innerHTML = totalamount

var php_varstikcerfee = <?php echo $annualstickerfee; ?>;
var php_mtopfee =<?php echo $mtopfee; ?>;
var php_mtopplatefee =<?php echo $mtopplatefee; ?>;


var php_operatoridfee =<?php echo $operatoridfee; ?>;
var php_driveridfee =<?php echo $driveridfee; ?>;
var php_parkingfee =<?php echo $parkingfee; ?>;
var php_droppingfee =<?php echo $droppingfee; ?>;
var php_confirmationfee =<?php echo $confirmationfee; ?>;
var php_certificationofnorecordfee =<?php echo $certificationofnorecordfee; ?>;
var php_transferfee =<?php echo $transferfee; ?>;
var php_farematrix =<?php echo $farematrix; ?>;
var php_bodynumberstickerfee =<?php echo $bodynumberstickerfee; ?>;
var php_environmentalfee =<?php echo $environmentalfee; ?>;

  function annualsticker() {
    var sticekerfee = document.getElementById("sticekerfee");
    var sticekerfeeamount = document.getElementById("sticekerfeeamount");


    if (sticekerfee.checked == true) {
         document.getElementById("sticekerfeeamount").innerHTML = php_varstikcerfee
         totalamount = totalamount + php_varstikcerfee
          document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("sticekerfeeamount").innerHTML = ""
        totalamount = totalamount - php_varstikcerfee
        document.getElementById("total").innerHTML = totalamount
    }
}
   function mtopplate() {   
       var plate = document.getElementById("plate");
    var sticekerfeeamount = document.getElementById("plateamount");
      if (plate.checked == true) {
        document.getElementById("plateamount").innerHTML = php_mtopplatefee
        totalamount = totalamount + php_mtopplatefee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("plateamount").innerHTML = ""
          totalamount = totalamount -php_mtopplatefee
           document.getElementById("total").innerHTML = totalamount
    }
}
//
function funcoperatoridfee() {   
    var operatoridfee = document.getElementById("operatoridfee");
    var operatoridamount = document.getElementById("operatoridamount");
      if (operatoridfee.checked == true) {
        document.getElementById("operatoridamount").innerHTML = php_operatoridfee
        totalamount = totalamount +php_operatoridfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("operatoridamount").innerHTML = ""
          totalamount = totalamount -php_operatoridfee
           document.getElementById("total").innerHTML = totalamount
    }
}
 


 function funcparkingfee() {   
    var parkingfee = document.getElementById("parkingfee");
    var parkingfeeamount = document.getElementById("parkingfeeamount");
      if (parkingfee.checked == true) {
        document.getElementById("parkingfeeamount").innerHTML = php_parkingfee;
        totalamount = totalamount + php_parkingfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("parkingfeeamount").innerHTML = ""
          totalamount = totalamount -php_parkingfee
           document.getElementById("total").innerHTML = totalamount
    }
}




 function funcdroppingfee() {   
    var droppingfee = document.getElementById("droppingfee");
    var droppingfeeamount = document.getElementById("droppingfeeamount");
      if (droppingfee.checked == true) {
        document.getElementById("droppingfeeamount").innerHTML = php_droppingfee;
        totalamount = totalamount + php_droppingfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("droppingfeeamount").innerHTML = ""
          totalamount = totalamount -php_droppingfee
           document.getElementById("total").innerHTML = totalamount
    }
}

 function funcconfirmationfee() {   
    var confirmationfee = document.getElementById("confirmationfee");
    var confirmationfeeamount = document.getElementById("confirmationfeeamount");
      if (confirmationfee.checked == true) {
        document.getElementById("confirmationfeeamount").innerHTML = php_confirmationfee;
        totalamount = totalamount + php_confirmationfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("confirmationfeeamount").innerHTML = ""
          totalamount = totalamount -php_confirmationfee;
           document.getElementById("total").innerHTML = totalamount
    }
}

function funccertificationofnorecordfee() {   
    var certificationofnorecordfee = document.getElementById("certificationofnorecordfee");
    var certificationofnorecordfeeamount = document.getElementById("certificationofnorecordfeeamount");
      if (certificationofnorecordfee.checked == true) {
        document.getElementById("certificationofnorecordfeeamount").innerHTML = php_certificationofnorecordfee;
        totalamount = totalamount + php_certificationofnorecordfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("certificationofnorecordfeeamount").innerHTML = ""
          totalamount = totalamount -php_certificationofnorecordfee;
           document.getElementById("total").innerHTML = totalamount
    }
}


function functransferfee() {   
    var transferfee = document.getElementById("transferfee");
    var transferfeeamount = document.getElementById("transferfeeamount");
      if (transferfee.checked == true) {
        document.getElementById("transferfeeamount").innerHTML = php_transferfee;
        totalamount = totalamount + php_transferfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("transferfeeamount").innerHTML = ""
          totalamount = totalamount -php_transferfee;
           document.getElementById("total").innerHTML = totalamount
    }
}


function funcfarematrix() {   
    var farematrix = document.getElementById("farematrix");
    var farematrixamount = document.getElementById("farematrixamount");
      if (farematrix.checked == true) {
        document.getElementById("farematrixamount").innerHTML = php_farematrix;
        totalamount = totalamount + php_farematrix
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("farematrixamount").innerHTML = ""
          totalamount = totalamount -php_farematrix;
           document.getElementById("total").innerHTML = totalamount
    }
}



function funcbodynumberstickerfee() {   
    var bodynumberstickerfee = document.getElementById("bodynumberstickerfee");
    var bodynumberstickerfeeamount = document.getElementById("bodynumberstickerfeeamount");
      if (bodynumberstickerfee.checked == true) {
        document.getElementById("bodynumberstickerfeeamount").innerHTML = php_bodynumberstickerfee;
        totalamount = totalamount + php_bodynumberstickerfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("bodynumberstickerfeeamount").innerHTML = ""
          totalamount = totalamount -php_bodynumberstickerfee;
           document.getElementById("total").innerHTML = totalamount
    }
}



function funcenvironmentalfee() {   
    var environmentalfee = document.getElementById("environmentalfee");
    var environmentalfeeamount = document.getElementById("environmentalfeeamount");
      if (environmentalfee.checked == true) {
        document.getElementById("environmentalfeeamount").innerHTML = php_environmentalfee;
        totalamount = totalamount + php_environmentalfee
         document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("environmentalfeeamount").innerHTML = ""
          totalamount = totalamount -php_environmentalfee;
           document.getElementById("total").innerHTML = totalamount
    }
}


function funcdriveridfee() {   
    var driveridfee = document.getElementById("driveridfee");
    var environmentalfeeamount = document.getElementById("environmentalfeeamount");
    var multipliers = +document.getElementById("driveridfeecount").value;
      if (driveridfee.checked == true) {
        document.getElementById("driveridfeeamount").innerHTML = php_driveridfee * multipliers;
        totalamount = totalamount + (php_driveridfee * multipliers)
     
         document.getElementById("getdriveramount1").value = multipliers;
         
          document.getElementById("driveridfeecount").disabled = true;
              document.getElementById("total").innerHTML = totalamount
    } 
    else {
       document.getElementById("driveridfeeamount").innerHTML = ""
          totalamount = totalamount -(php_driveridfee * multipliers);
           document.getElementById("total").innerHTML = totalamount
           document.getElementById("getdriveramount1").value = 0;
            document.getElementById("driveridfeecount").disabled = false;
    }
}



</script>
<?php
if(isset($_POST['addmtop'])){

 if (isset($_POST['mtopfee'])) {
      $inmtopfee = $_POST['mtopfee'];
    } else { $inmtopfee ="";}


    if (isset($_POST['annualstickerfee'])) {
      $inannualstickerfee = $_POST['annualstickerfee'];
    }else { $inannualstickerfee ="";}


 if (isset($_POST['mtopplatefee'])) {
      $inmtopplatefee = $_POST['mtopplatefee'];
    }else { $inmtopplatefee ="";}


 if (isset($_POST['operatoridfee'])) {
      $inoperatoridfee = $_POST['operatoridfee'];
    }else { $inoperatoridfee ="";}


 if ($_POST['getdriveramount'] !="") {
      $dfee = $_POST['getdriveramount'];
      $indriveridfee = $dfee * $driveridfee;

    }else { $indriveridfee ="";}

 if (isset($_POST['parkingfee'])) {
      $inparkingfee = $_POST['parkingfee'];
    }else { $inparkingfee ="";}


 if (isset($_POST['droppingfee'])) {
      $indroppingfee = $_POST['droppingfee'];
    }else { $inpindroppingfeearkingfee ="";}

 if (isset($_POST['confirmationfee'])) {
      $inconfirmationfee = $_POST['confirmationfee'];
    }else { $inconfirmationfee ="";}

 if (isset($_POST['certificationofnorecordfee'])) {
      $incertificationofnorecordfee = $_POST['certificationofnorecordfee'];
    }else { $incertificationofnorecordfee ="";}


 if (isset($_POST['transferfee'])) {
      $intransferfee = $_POST['transferfee'];
    }else { $intransferfee ="";}


 if (isset($_POST['farematrix'])) {
      $infarematrix = $_POST['farematrix'];
    }else { $infarematrix ="";}


 if (isset($_POST['bodynumberstickerfee'])) {
      $inbodynumberstickerfee = $_POST['bodynumberstickerfee'];
    }else { $bodynumberstickerfee ="";}


 if (isset($_POST['environmentalfee'])) {
      $inenvironmentalfee = $_POST['environmentalfee'];
    }else { $inenvironmentalfee ="";}
$mtopdate = $_POST['mtopdate'];
$mtopexpiration = date('Y-12-31', strtotime('+1 year'));


$mtoptotal = $inmtopfee + $inannualstickerfee + $inmtopplatefee +$inoperatoridfee +$indriveridfee + $inparkingfee  + $indroppingfee +$inconfirmationfee+$incertificationofnorecordfee+$intransferfee+$infarematrix+$inbodynumberstickerfee+$inbodynumberstickerfee+$inenvironmentalfee;

$sql = "INSERT INTO `mtop` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `mtoptotal`, `mtopdate`, `mtopexpiration`, `trikeid`) 
VALUES ('NULL', '$inmtopfee', '$inannualstickerfee', '$inmtopplatefee', '$inoperatoridfee', '$indriveridfee', '$inparkingfee', '$indroppingfee', '$inconfirmationfee', '$incertificationofnorecordfee', '$intransferfee', '$infarematrix', '$inbodynumberstickerfee', '$inenvironmentalfee', '$mtoptotal', '$mtopdate', '$mtopexpiration', '$tid')";

if ($conn->query($sql) === TRUE) { 

  $sql = "UPDATE `tricycle` SET `currentmtop` = '2022-07-06' WHERE `tricycle`.`id` = $tid";
  if ($conn->query($sql) === TRUE) { 


$sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Updated MTOP', 'updated mtop', now(), 'done', '', '$tid')";
if ($conn->query($sql) === TRUE) {  

 

  echo "<script type='text/javascript'>alert(\"Successfully Updated MTOP RECORD  \")</script>";
                                      echo '<script>window.location.href="profile.php?id='.$tid.'"</script>';
}
}}}
  ?>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
        <div class="col-xl-4" >

          <div class="card" hiddne>
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="upload/<?php echo $picname; ?>" alt="Profile" class="rounded-circle">
              <h5><B><?php echo $fname." ".$lname ; ?></B></h5>
              <h3><?php echo $type; ?></h3>
              <div class="social-links mt-2">
             <a href="driveroperatorprofile.php?id=<?php echo $pid; ?>">   <button class="btn btn-success" > Show Profile </button></a>
              </div>
            </div>
          </div>
             <div class="card" <?php if ($trikestatus=="dropped") {
          echo "hidden";
          # code...
        } ?>>
         <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

  
<div class="social-links mt-2">

 <a href="#printform<?php echo $tid;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-lg'>
  <i class="bi bi-printer"></i> PRINT FORM</button></a></i>

</div>
<div class="social-links mt-2">

 <a href="cpcpdf.php?id=<?php echo $tid;?>" target="_blank"><button type='button' class='btn btn-primary btn-lg'>
  <i class="bi bi-printer"></i> PRINT CPC</button></a></i>
  
</div>
<div class="social-links mt-2">
  <button type='button' class='btn btn-warning btn-lg' type="button" data-toggle="modal"  data-target=".bd-example-modal-xl"><a href="#" data-toggle="modal">
  <i class="bi bi-pencil-fill"></i>Edit</button></a></i>
</div>
<div class="social-links mt-2">
  <a href="#drop<?php echo $tid;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-lg' <?php if ($trikestatus=="no unit") {
          echo "hidden";
          # code...
        } ?> >
  <i class="bi bi-trash-fill"></i> DROP UNIT</button> </a></i>
  


</div>

   
              
            </div>
          </div>

 <div class="card" <?php if ($trikestatus !="dropped") {
   echo "hidden";
 } ?>>
         <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

  
<div class="social-links mt-2">

<strong><font color = "red">Notice this franchise was dropped</font></strong>

</div>











          
          
          
              
            </div>
        </div>
    </section>


     



     <div id="printconfirmation<?php echo $tid;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        <form method="post"> <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Generate Confrimation Certificate</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="pid" value="<?php echo $tid; ?>">
                

                                        <div class="alert alert-success">Please Input OR number for<strong>
                                                <?php echo $fname." ".$lname."</strong>  with Body Number: "."<strong>".$bodynum."</strong>"; ?></div>

                                        <input type="text" name="confirmationor" class="form-control" placeholder="OR NUMBER" required>
                                        <div class="modal-footer">
                                           <button type="submit" name="printconfirmation" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

     <div id="printform<?php echo $tid;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        <form method="post"> <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Generate form</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="pid" value="<?php echo $tid; ?>">
                

                                        <div class="alert alert-info">Do you want to generate form for <strong>
                                                <?php echo $fname." ".$lname."</strong>  with Body Number: "."<strong>".$bodynum."</strong>"; ?>? </div>
                                        <div class="modal-footer">
                                           <button type="submit" name="printform" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


  <div id="drop<?php echo $tid;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                        <form method="post"> <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Drop record</h4>
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="pid" value="<?php echo $tid; ?>">
                

                                        <div class="alert alert-danger">Are you sure you want to drop the unit of <strong>
                                                <?php echo $fname." ".$lname."</strong>  with Body Number: "."<strong>".$bodynum."</strong>"; ?>? </div>



                                        <div class="modal-footer">
                                           <button type="submit" name="droprecord" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

<!-- ADD NEW UNIT -->

<div class="modal fade bd-addnewunit-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Add new unit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

     

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NEW UNIT INFO</h5>

              <!-- General Form Elements -->
         <form method="POST">


            
            
       
              
   <input type="text" class="form-control" name="pid" hidden value="<?php echo $id; ?>">
           
                  <br>
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
                    <input type="text" class="form-control" name="engineno" placeholder="Engine Number" name="engineno">
                  </div>
                   <div class="col-sm-2">
                    Chasis Number
                    <input type="text" class="form-control" name="chasisno" placeholder="Chasis Number" name="chasisno">
                  </div>
            
<br>
<br>            
<br>
<br>            


                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>Other Details</b></label>
                  <div class="col-sm-2">
                    Maker
                    <input type="text" class="form-control" name="maker" placeholder="Maker">
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
                    <input type="text" class="form-control" name="cor" placeholder="Certificate of Registration" name="cor">
                  </div>
                   <div class="col-sm-2">
                    Official Receipt No.
                    <input type="text" class="form-control" placeholder="OR" name="ornum">
                  </div>



<br>
            
             <!-- End General Form Elements -->

            </div>
          </div>

        </div>
</div></section>





          <div class="modal-footer">
               <button type="submit" name="addnewunit"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>

           





<!-- End Add new unit -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Edit Franchise</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

     

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Franchise</h5>

              <!-- General Form Elements -->
         <form method="POST">


            
            
           
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
                      <option value="<?php echo $trikeclassification; ?>" selected><?php echo $trikeclassification; ?></option>
                      <option value="Public">Public Motorized Tricycle for Hire</option>
                      <option value="Utility">Utility Motorized Tricycle</option>
                      <option value="Family">Family-Use Motorized Tricycle</option>
                    </select>
                  </div>
                  
                   <div class="col-sm-3">
              
                   <select class="form-select" aria-label="Default select example" required name="toda">
                      <option value="<?php echo $toda; ?>" selected><?php echo $toda; ?></option>
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
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>SERIAL NUMBERS:</b></label>
                  <div class="col-sm-2">
                    MV File number
                    <input type="text" class="form-control" name="fileno" placeholder="MV FILE NO." name="fileno" value="<?php echo $mvfileno; ?>">
                  </div>
                  <div class="col-sm-2">
                    Plate Number
                    <input type="text" class="form-control" name="plateno" placeholder="Plate Number" name="plateno" value="<?php echo $plateno; ?>">
                  </div>
                   <div class="col-sm-2">
                    Engine Number
                    <input type="text" class="form-control" name="engineno" placeholder="Engine Number" name="engineno" value="<?php echo $engineno; ?>">
                  </div>
                   <div class="col-sm-2">
                    Chasis Number
                    <input type="text" class="form-control" name="chasisno" placeholder="Chasis Number" name="chasisno" value="<?php echo $chasisno; ?>">
                  </div>
                  </div>
            
<br>


                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>Other Details</b></label>
                  <div class="col-sm-2">
                    Maker
                    <input type="text" class="form-control" name="maker" placeholder="Maker" value="<?php echo $maker; ?>">
                  </div>
                    <div class="col-sm-2">
                    Motor Color
                    <input type="text" class="form-control" name="motorcolor" placeholder="Motor Color" value="<?php echo $motorcolor; ?>">
                  </div>
                  <div class="col-sm-2">
                    Piston Displacement
                    <input type="text" class="form-control" placeholder="Piston Displacement" name="piston" value="<?php echo $pistondisp; ?>">
                  </div>
                   <div class="col-sm-2">
                    Cert. of Reg.
                    <input type="text" class="form-control" name="cor" placeholder="Certificate of Registration" name="cor" value="<?php echo $cor; ?>">
                  </div>
                   <div class="col-sm-2">
                    Official Receipt No.
                    <input type="text" class="form-control" placeholder="OR" name="ornum" value="<?php echo $ornum; ?>">
                  </div>
                  </div>



<br>

                     <div class="row mb-6">
                  <label for="inputEmail" class="col-sm-2 col-form-label"><b>FRANCHISE</b></label>
                  <div class="col-sm-4">
                    Date of Application
                    <input type="date" class="form-control" placeholder="dateofissue" name="applicationdate" value="<?php echo $applicationdate; ?>" <?php if ($currentfrachise !="0000-00-00"){ echo "disabled";}?>>
                
                  </div>
                  <div class="col-sm-1">
                    Brgy #
                    <input class="form-control" type="text" name="brgycode" maxlength="2"  min="0" max="9999" step="1" placeholder="_ _" pattern="[0-9]{2}" style="color:#888;" required value="<?php echo $brgycode; ?>"/>
                  </div>
                   <div class="col-sm-3">
                    Body Number
                    <input class="form-control" type="text" name="bdynumber" maxlength="4"  min="0" max="9999" step="1" placeholder="_ _ _ _" pattern="[0-9]{4}" style="color:#888;" required value="<?php echo $bodynum; ?>"/>
                  </div>
                  
                  </div>
            
             <!-- End General Form Elements -->

            </div>
          </div>

        </div>
</div></section>





          <div class="modal-footer">
               <button type="submit" name="editfranchise"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>

               
<?php 
if(isset($_POST['printnorecord'])){
$dropid = $_POST['dropid'];
$trikeeid = $_GET['id'];
$norecordornum = $_POST['norecordcert'];
$selectquery = "SELECT * FROM `tbl_payments` WHERE ornumber = $certornum";
$result = $conn->query($selectquery);
                      if($result->num_rows> 0){

 echo "<script type='text/javascript'>alert(\"Or number already exist, will show you the record now..\")</script>";

   echo '<script>window.location.href="norecordpdf.php?id='.$trikeeid.'&ornum='.$norecordornum.'&dropid='.$dropid.'"</script>';

    }else{

 $sql = "INSERT INTO `tbl_payments` (`paymentid`, `payable`, `amount`, `ornumber`, `trikeid`) VALUES (NULL, 'No record', '60', '$norecordornum', '$trikeeid')";
if ($conn->query($sql) === TRUE) {  
 
  $sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Paid and Printer Cert of Confirmation', 'edited franchise', now(), 'done', '', '$editid')";

if ($conn->query($sql) === TRUE) {  

    echo "<script type='text/javascript'>alert(\"Added payment record, Showing the certificate now..\")</script>";

   echo '<script>window.location.href="norecordpdf.php?id='.$trikeeid.'&ornum='.$certornum.'&dropid='.$dropid.'"</script>';

    }
}
 }
}










 if(isset($_POST['printconfirmation'])){
$trikeeid = $_GET['id'];
$certornum = $_POST['confirmationor'];
$selectquery = "SELECT * FROM `tbl_payments` WHERE ornumber = $certornum";
$result = $conn->query($selectquery);
                      if($result->num_rows> 0){

 echo "<script type='text/javascript'>alert(\"Or number already exist, will show you the record now..\")</script>";

   echo '<script>window.location.href="confirmationpdf.php?id='.$trikeeid.'&ornum='.$certornum.'"</script>';

    }else{

 $sql = "INSERT INTO `tbl_payments` (`paymentid`, `payable`, `amount`, `ornumber`, `trikeid`) VALUES (NULL, 'Confirmation', '60', '$certornum', '$trikeeid')";
if ($conn->query($sql) === TRUE) {  
 
  $sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Paid and Printer Cert of Confirmation', 'edited franchise', now(), 'done', '', '$editid')";

if ($conn->query($sql) === TRUE) {  

    echo "<script type='text/javascript'>alert(\"Added payment record, Showing the certificate now..\")</script>";

   echo '<script>window.location.href="confirmationpdf.php?id='.$trikeeid.'&ornum='.$certornum.'"</script>';

    }
}
 }
}


 if(isset($_POST['editfranchise'])){
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$xname  = $_POST['xname'];

$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];

$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];
$toda = $_POST['toda'];

if ($currentfrachise == "0000-00-00") {

   $applicationdate = $_POST['applicationdate'];

}else{

 $applicationdate = $editapplicationdate;
}

  $selectquery = "SELECT `color` from toda where `toda` = '$toda'";
  $result = $conn->query($selectquery);
                      if($result->num_rows> 0){
                        while($row = $result->fetch_assoc()) {
                            $sidecarcolor = $row['color'];
                        }
                      }
  $rowprintid= $_POST['pid'];

$sql = "UPDATE `tricycle` SET `mvfileno` = '$fileno', `plateno` = '$plateno', `engineno` = '$engineno', `chasisno` = '$chasisno', `maker` = '$maker', `motorcolor` = '$motorcolor', `pistondisp` = '$piston', `cor` = '$cor', `ornum` = '$ornum', `applicationdate` = '$applicationdate', `brgycode` = '$brgycode', `bodynum` = '$bdynumber', `toda` = '$toda', `sidecarcolor` = '$sidecarcolor', `inspectionstat` = 'inspectionstat', `classification` = '$classification' WHERE `tricycle`.`id` = $editid";
if ($conn->query($sql) === TRUE) {  

  $sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Edited Franchise Details', 'edited franchise', now(), 'done', '', '$editid')";
if ($conn->query($sql) === TRUE) {  


  echo "<script type='text/javascript'>alert(\"Successfully Edited  \")</script>";

   echo '<script>window.location.href="profile.php?id='.$editid.'"</script>';
                                      
}}}


if(isset($_POST['addnewunit'])){

  $rowprintid= $_GET['id'];

$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];


  $sql = "UPDATE `tricycle` SET `mvfileno` = '$fileno', `plateno` = '$plateno', `engineno` = '$engineno', `chasisno` = '$chasisno', `maker` = '$maker', `motorcolor` = '$motorcolor', `pistondisp` = '$piston', `cor` = '$cor', `ornum` = '$ornum', `status` = 'with unit' WHERE `tricycle`.`id` = $rowprintid";
if ($conn->query($sql) === TRUE) {  

$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Added new unit', 'Added new unit', now(), 'done', '', '$rowprintid')";
if ($conn->query($sqlt) === TRUE) {  
  echo "<script type='text/javascript'>alert(\"Successfully Added new unit  \")</script>";
                                       echo '<script>window.location.href="profile.php?id='.$rowprintid.'"</script>';
                  }                                  
}}













 if(isset($_POST['printform'])){
	$rowprintid= $_POST['pid'];

$sql = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Printed Form', 'generate or print form', now(), 'done', '', '$rowprintid')";
if ($conn->query($sql) === TRUE) {  

  echo "<script type='text/javascript'>alert(\"Successfully Generated  \")</script>";

   echo '<script>window.location.href="formpdf.php?id='.$rowprintid.'"</script>';
                                      
}}

if(isset($_POST['droprecord'])){
  $rowprintid= $_POST['pid'];

$sql = "INSERT INTO dropped (dmvfileno, dplateno, dengineno, dchasisno, dmaker, dmotorcolor, dpistondisp, dcor, dornum, trikeid, dropdate)
SELECT `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`,'$rowprintid',CURDATE()
FROM tricycle WHERE id = $rowprintid";
if ($conn->query($sql) === TRUE) {  

  $sql = "UPDATE `tricycle` SET `mvfileno` = 'dropped', `plateno` = 'dropped', `engineno` = 'dropped', `chasisno` = 'dropped', `maker` = 'dropped', `motorcolor` = 'dropped', `pistondisp` = 'dropped', `cor` = 'dropped', `ornum` = 'dropped', `status` = 'no unit' WHERE `tricycle`.`id` = $rowprintid";
if ($conn->query($sql) === TRUE) {  

$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'DROPPED UNIT', 'DROPPED Unit', now(), 'done', '', '$rowprintid')";
if ($conn->query($sqlt) === TRUE) {  
  echo "<script type='text/javascript'>alert(\"Successfully Dropped  \")</script>";
                                       echo '<script>window.location.href="profile.php?id='.$rowprintid.'"</script>';
                  }                                  
}}}


if(isset($_POST['adddropped'])){
  $trike= $_GET['id'];
  $dropdid = $_POST['droppedid'];


$sql = "SELECT * from dropped where dropid = $dropdid";
      
    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                            $reropid = $row['dropid'];  
                            $remvfileno = $row['dmvfileno']; 
                            $replateno = $row['dplateno']; 
                            $reengineno = $row['dengineno']; 
                            $rechasisno = $row['dchasisno']; 
                            $remaker = $row['dmaker']; 
                            $remotorcolor = $row['dmotorcolor']; 
                            $repistondisp = $row['dpistondisp']; 
                            $recor = $row['dcor']; 
                            $reornum =$row['dornum'];
                            $reropdate = $row['dropdate']; 
                            $trikeid = $row['trikeid']; 
                          
                  }}
  $sql = "UPDATE `tricycle` SET `mvfileno` = '$remvfileno', `plateno` = '$replateno', `engineno` = '$reengineno', `chasisno` = '$rechasisno', `maker` = '$remaker', `motorcolor` = '$remotorcolor', `pistondisp` = '$repistondisp', `cor` = '$recor', `ornum` = '$reornum', `status` = 'with unit' WHERE `tricycle`.`id` = $trike";
if ($conn->query($sql) === TRUE) {  

$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Get Dropped Unit', ' Get DROPPED Unit', now(), 'done', '', '$trike')";


if ($conn->query($sqlt) === TRUE) { 

  $sqldel = "DELETE FROM DROPPED WHERE dropid = $dropdid";


if ($conn->query($sqldel) === TRUE) { 

  echo "<script type='text/javascript'>alert(\"Successfully Added Dropped Unit  \")</script>";
                                       echo '<script>window.location.href="profile.php?id='.$trike.'"</script>';
                  }                                  
}}
}


?>                
      <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" <?php if ($trikestatus=="dropped") {
          echo "hidden";
          # code...
        } ?>>
            <div class="card-body">
              <h5 class="card-title">Driver List</h5>
              <!-- Extra large modal -->





<!-- Extra large modal NEW -->



<div class="modal fade bd-example22-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
              <h5 class="card-title">Driver / Operator</h5>

              <!-- General Form Elements -->
         <form method="POST" role="form">
              

  
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
                    <select class="form-select" aria-label="Default select example" required name="type">
                      <option value="DRIVER" selected>DRIVER</option>
                    
                    </select>
                  </div>
                </div>


                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control" placeholder="LICENSE NUMBER" name="licensid">
                  </div>
                    <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example" required name="lictype">
                          <option value="" disabled selected>SELECT LICENSE TYPE</option>
                      <option value="OPERATOR">PROFESSIONAL</option>
                      <option value="OPERATOR/DRIVER">NON-PROFESSIONAL</option>
                    </select>
                  </div>
                  </div>

                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Driver's License Validity</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control"  placeholder="EXPIRATION" name="expiration">
                  </div>
                  </div>
            
             <!-- End General Form Elements -->

            </div>
          </div>

        </div>
</div></section>



          <div class="modal-footer">
               <button type="submit" name="savedriver"class="btn btn-success">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>


</div>

  <!-- End ADD NEW MODAL -->
<!-- ADD UNIT MODAL -- >













<!--END ADD UNIT MODAL -->



<!-- Extra large modal EXISTING -->


<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Add Existing driver</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
     

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Driver</h5>

              <!-- General Form Elements -->
         <form method="POST">
        

      

                <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">DRIVER ID</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Driver ID" name="driverid" required  oninvalid="this.setCustomValidity('ENTER THE ID # OF THE SELECTED DRIVER')"> 
                  

                  </div>


                   
               
             <div class="col-sm-3">   <button type="submit" name="adddriver" class="btn btn-success">Save</button></div>

             <!-- End General Form Elements -->

            </div>
          </div>

        </div>


</div></section>

             <table id="tbldriver" class="display" style="width:100%">
              <div>
                      <thead>
            <tr>
                <th>ID</th>
                
                <th>Name</th>
                <th>License Numver</th>
                <th>Birthday</th>
                <th>Barangay</th>
            </tr>
        </thead>
        <tbody>
          <?php
    
       
         $sql = "SELECT * from driveroperator WHERE type ='DRIVER';";
      
        
          
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                            $id = $row['pid'];  
                            $fname = $row['fname']; 
                            $mname = $row['mname']; 
                            $lname = $row['lname']; 
                            $address1 = $row['address1']; 
                            $barangay = $row['barangay']; 
                            $contactnumber = $row['contactnumber']; 
                            $sfname = $row['sfname']; 
                            $smname = $row['smname']; 
                            $slaname = $row['slaname']; 
                            $bday = $row['bday']; 
                            $type = $row['type']; 
                            $licensenum = $row['licensenum']; 
                            $licensetype = $row['licensetype']; 
                            $licensevalid = $row['licensevalid']; 
                            $picname = $row['picname']; 
                    ?> 
      
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fname." ".$mname." ".$lname; ?></td>
                <td><?php echo $licensenum; ?></td>
                <td><?php echo $bday;?></td>
               
                <td><?php echo $barangay;?></td>
             
 <?php }}?>


        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                
                <th>Name</th>
                <th>License Numver</th>
                <th>Birthday</th>
                <th>Barangay</th>
            </tr>
        </tfoot>
    </table>




          <div class="modal-footer">
             
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>
             <table id="tbldriver" class="display" style="width:100%">
        <thead>
            <tr>


</div>
            




                <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example22-modal-xl">ADD NEW DRIVER </button>

                <button class="btn btn-warning" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl2">ADD EXISTING DRIVER </button>
              </div>
              <br></br>

             <table id="tblPeople" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                
                <th>Name</th>
                <th>License #</th>
                <th>Birthday</th>
                <th>Barangay</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php




$sql = "SELECT
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname,
  driveroperator.lname,
  driveroperator.licensenum,
  driveroperator.barangay,
  driveroperator.bday,
  tricycle.bodynum,
  drivers.id
FROM driveroperator
JOIN drivers
ON driveroperator.pid = drivers.driverid
JOIN tricycle
ON tricycle.bodynum = drivers.bdynumber WHERE tricycle.id = '$tid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $did = $row['pid'];  
                            $dfname = $row['fname']; 
                            $dmname = $row['mname']; 
                            $dlname = $row['lname']; 
                            $dlicensenum = $row['licensenum']; 
                            $dbarangay = $row['barangay']; 
                            $dbday = $row['bday']; 
                            $tbldriversid = $row['id']; 










?>
            <tr>
                <td><?php echo $did; ?></td>
                <td><?php echo $dfname." ".$dmname." ".$dlname; ?></td>
                <td><?php echo $dlicensenum; ?></td>
                <td><?php echo $dbday; ?></td>
                <td><?php echo $dbarangay; ?></td>
                
                <td>
  <a href="driveroperatorprofile.php?id=<?php echo  $id; ?>&bdynum=<?php echo  $brgycode.'-'.$bodynum; ?>"><button type='button' class='btn btn-primary btn-sm'>
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






<!---change unit--->





<!--- end change unit-->

            <?php }}
 if(isset($_POST['delete'])){
                            // sql to delete a record
   $rowprintid= $_GET['id'];
                            $delete_id = $_POST['delete_id'];
                              $profileid = $_POST['profileid'];
                            $sql = "DELETE FROM drivers     WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM drivers WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM drivers WHERE id='$delete_id' ";
                                   

$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Removed Driver $delete_id', 'removed driver from tricycle', now(), 'done', '', '$rowprintid')";
$conn->query($sqlt);
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
                
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last NAme</th>
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





<!-- Extra large modal EXISTING -->


<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="adddropunit">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
       <div class="modal-header">
              <h4 class="modal-title">Add Dropped Unit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
     

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Driver</h5>

              <!-- General Form Elements -->
         <form method="POST">
        

      

                <div class="row mb-2">
                  <label for="inputText" class="col-sm-2 col-form-label">UNIT ID</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Unit ID" name="droppedid" required  oninvalid="this.setCustomValidity('ENTER THE ID # OF THE SELECTED UNIT')"> 
                  

                  </div>


                   
               
             <div class="col-sm-3">   <button type="submit" name="adddropped" class="btn btn-success">Add</button></div>

             <!-- End General Form Elements -->

            </div>
          </div>

        </div>


</div></section>

             <table id="tbladddropped" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>File No.</th>
                <th>Plate No.</th>
                <th>Engine No.</th>
                <th>Chasis No.</th>
                <th>Maker</th>
                <th>Motor Color</th>
                <th>Piston Dip</th>
                <th>Drop Date</th>
                <th>Dropped By</th>
            </tr>
        </thead>
        <tbody><?php
        include 'include/connection.php';
       
          $sql = "SELECT * from dropped";
      
    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                            $dropid = $row['dropid'];  
                            $dmvfileno = $row['dmvfileno']; 
                            $dplateno = $row['dplateno']; 
                            $dengineno = $row['dengineno']; 
                            $dchasisno = $row['dchasisno']; 
                            $dmaker = $row['dmaker']; 
                            $dmotorcolor = $row['dmotorcolor']; 
                            $dpistondisp = $row['dpistondisp']; 
                            $dcor = $row['dcor']; 
                            $dropdate = $row['dropdate']; 
                            $trikeid = $row['trikeid']; 
                          
                    ?> 
      
            <tr>
                <td><?php echo $dropid; ?></td>
                <td><?php echo $dmvfileno; ?></td>
                <td><?php echo $dplateno; ?></td>
                <td><?php echo $dengineno; ?></td>
                <td><?php echo $dchasisno;?></td>
                <td><?php echo $dmaker;?></td>
                <td><?php echo $dpistondisp;?></td>
                <td><?php echo $dcor;?></td>
                <td><?php echo $dropdate;?></td>
                <td>
                             
                      <?php echo $trikeid;?></td>
                  </a>
</td>
            </tr>
            <?php }}?>
        </tbody>
        <tfoot>
            <tr>
               <th>ID</th>
                <th>File No.</th>
                <th>Plate No.</th>
                <th>Engine No.</th>
                <th>Chasis No.</th>
                <th>Maker</th>
                <th>Motor Color</th>
                <th>Piston Dip</th>
                <th>Drop Date</th>
                <th>Dropped By</th>
            </tr>
        </tfoot>
    </table>



          <div class="modal-footer">
             
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
             </form>
    </div>

  </div>
</div>
             <table id="tbldriver" class="display" style="width:100%">
        <thead>
            <tr>


</div>
            
















<?php
if (isset($_POST['adddriver'])) {

  $driverid =$_POST['driverid'];
$sqlcheck = "select * from drivers where trikeid='$tid' and driverid='$driverid'";
$result = $conn->query($sqlcheck);
if ($result->num_rows > 0)  { 
 echo "<script type='text/javascript'>alert(\"Not added,Already a driver in this franchise\")</script>";
           echo "<script>window.location.href='profile.php?id=$tid'</script>";
           } else{ 

$sql = "INSERT INTO `drivers` (`id`, `bdynumber`, `trikeid`, `driverid`) VALUES (NULL, '$bodynum', '$tid', '$driverid')";

if ($conn->query($sql) === TRUE) {  
  $sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Added Existing Driver', 'added driver to tricycle', now(), 'done', '', '$tranid')";
if ($conn->query($sqlt) === TRUE) {  

 echo "<script type='text/javascript'>alert(\"Successfully added driver \")</script>";
           echo "<script>window.location.href='profile.php?id=$tid'</script>"; 

 }
}}}

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
$tranid = $_GET['id'];


$sql = "INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `extname`, `address1`, `barangay`,`contactnumber`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`,`picname`) VALUES 
  (NULL, '$fname', '$mname', '$lname', '$xname', '$address1', '$barangay','$contactnum', '$sfname', '$smname', '$slname', '$bday', '$type', '$licensid', '$licensetype', '$expiration', '$img_name')";

if ($conn->query($sql) === TRUE) {  

 $last_id = $conn->insert_id;
$sql = "INSERT INTO `drivers` (`id`, `bdynumber`, `trikeid`, `driverid`) VALUES (NULL, '$bodynum', '$tid', '$last_id')";

if ($conn->query($sql) === TRUE) {  


$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Added New Driver', 'added driver to tricycle', now(), 'done', '', '$tranid')";
if ($conn->query($sqlt) === TRUE) {  
 echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='profile.php?id=$tid'</script>"; 

}

}}
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
    $('#tblPeople2').DataTable();
} );
</script>

<script>
jQuery(document).ready(function($) {
    $('#tbladddropped').DataTable();
} );
</script>
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

</body>
</body>

</html>