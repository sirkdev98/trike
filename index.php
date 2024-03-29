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

  <title>Dashboard</title>
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
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tricycle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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
          <li> 
          <a href="mtop.php">
              <i class="bi bi-circle"></i><span>MTOP</span>
            </a>
          </li>
       </ul>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables2-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Drivers And Operators</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables2-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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
        <a class="nav-link collapsed" href="downloads.php">
          <i class="bi bi-download"></i>
          <span>Downloadables</span>
        </a>
      </li>

   
  </aside><!-- End Sidebar-->


  <main id="main" class="main">
<?php 
$lastyear = date("Y",strtotime("-1 year"));
 $sql = "SELECT
    (SELECT COUNT(*) FROM tricycle WHERE YEAR(`currentmtop`) >= YEAR(CURDATE()))AS withmtop,
    (SELECT COUNT(*) FROM tricycle WHERE `currentfranchise` >= now())AS withfranchise,
    (SELECT COUNT(*) FROM tricycle WHERE `sidecarcolor` ='Red') AS redcount,
    (SELECT COUNT(*) FROM tricycle WHERE `sidecarcolor` ='Blue') AS bluecount,
    (SELECT COUNT(*) FROM tricycle WHERE `sidecarcolor` ='Yellow') AS yellowcount,
    (SELECT COUNT(*) FROM tricycle WHERE `sidecarcolor` ='White') AS whitecount,
    (SELECT COUNT(*) FROM tricycle WHERE `sidecarcolor` ='Green') AS greencount,
    (SELECT COUNT(*) FROM tricycle )AS trikecount,
    (SELECT SUM(mtoptotal)FROM mtop WHERE YEAR(`mtopdate`)= YEAR(CURDATE())) AS mtopcollection,
    (SELECT SUM(mtoptotal)FROM mtop WHERE YEAR(`mtopdate`)= '$lastyear') AS mtopcollectionlastyear,
    (SELECT COUNT(*) FROM driveroperator WHERE type = 'OPERATOR') AS operatorcount,
    (SELECT COUNT(*) FROM driveroperator WHERE type = 'DRIVER') AS drivercount,
    (SELECT COUNT(*) FROM driveroperator WHERE type = 'OPERATOR/DRIVER') AS opdrivecount";
   
        
          
 $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                       while( $row = $result->fetch_assoc()){
                        

                            $withmtop = $row['withmtop'];  
                            $withfranchise =$row['withfranchise'];
                            $trikecount = $row['trikecount'];
                            $mtopcollection = $row['mtopcollection'];
                            $mtopcollectionlastyear = $row['mtopcollectionlastyear'];
                            $operatorcount = $row['operatorcount'];
                            $opdrivecount = $row['opdrivecount'];
                            $drivercount = $row['drivercount'];
                            $redcount = $row['redcount'];
                            $bluecount = $row['bluecount'];
                            $yellowcount = $row['yellowcount'];
                            $whitecount = $row['whitecount'];
                            $greencount = $row['greencount'];
}}
if ($mtopcollectionlastyear != 0) {
 $increase = number_format((($mtopcollection - $mtopcollectionlastyear)/$mtopcollectionlastyear)*100,2);
}else{

  $increase = 0.00;
}

$redpercent =($redcount / $trikecount)*100;
$yellowpercent =($yellowcount / $trikecount)*100;
$bluepercent =($bluecount / $trikecount)*100;
$greenpercent =($greencount / $trikecount)*100;
$whitepercent =($whitecount / $trikecount)*100;





?>

    

    <div class="pagetitle">
      <h1>Dashboard </h1>
      <nav>
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Tricycle</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="ri-motorbike-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $trikecount ?></h6>
                    

                    </div>
                  </div>
                </div>

              </div>
            </div>



              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Franchise Registered</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bi-check-circle-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $withfranchise; ?></h6>
                        

                    </div>
                  </div>
                </div>

              </div>
            </div>


            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Tricycle with MTOP</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="ri-motorbike-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $withmtop; ?></h6>
                <span class="text-success small pt-1 fw-bold">/</span> <span class="text-muted small pt-2 ps-1"><?php echo $trikecount." franchise"?></span>


                    </div>
                  </div>
                </div>

              </div>
            </div>

          



            <!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               

                <div class="card-body">
                  <h5 class="card-title">Collection <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash-stack"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $mtopcollection; ?></h6>
                         <?php if ($increase <0) {
                         $color ="danger";
                        }else { $color ="success";} ?>
                      <span class="text-<?php echo $color; ?> small pt-1 fw-bold"><?php echo $increase; ?>%</span><span class="text-muted small pt-2 ps-1">


                        <?php if ($increase <0) {
                          echo "Lower ";
                        }else { echo "Higher ";} ?> last year</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                  <h5 class="card-title">Operator<span> | total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $operatorcount;?></h6>
                    

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->



  <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                  <h5 class="card-title">Driver / Operator<span> | total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $opdrivecount;?></h6>
                     

                    </div>
                  </div>

                </div>
              </div>

            </div>



  <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                  <h5 class="card-title">Driver<span> | total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-earmark-person-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $drivercount;?></h6>
                     

                    </div>
                  </div>

                </div>
              </div>

            </div>














            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">

              
                <div class="card-body">
                  <h5 class="card-title">Records <span>|Recently added</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Record #</th>
                        <th scope="col">Owner/Operator</th>
                        <th scope="col">Body Number</th>
                        <th scope="col">MTOP</th>
                        <th scope="col">Franchise Status</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
    $sql = "SELECT * FROM `tricycle` ORDER BY id DESC limit 5";
  $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $rid = $row['id'];
                            $fname =$row['fname'];
                            $mname =$row['mname'];
                            $lname =$row['lname'];
                            $brgycode= $row['brgycode'];
                            $bodynum= $row['bodynum'];
                            $operatorid = $row['operatorid'];
                            $applicationdate = $row['applicationdate'];
                            $currentfranchise = $row['currentfranchise'];
                            $currentmtop = $row['currentmtop'];
                            $classifications = $row['classification'];







?>

                      <tr>
                        <th><a href="profile.php?id=<?php echo $rid; ?>"><?php echo $rid ?></a></th>
                        <td><?php echo $fname." ".$mname." ".$lname; ?></td>
                        <td><a href="profile.php?id=<?php echo $rid; ?>" class="text-primary"><?php echo $brgycode."-".$bodynum; ?></a></td>
                       <?php 
                        $today = date("Y-m-d");
                        if ($currentmtop=='0000-00-00') {
                          echo "<td><span class='badge bg-warning'>No mtop record</span></td>";
                        }
                        elseif ($currentmtop > $today){

                           echo "<td><span class='badge bg-success'>$currentmtop - Registered</span></td>";
                        }
                        else{

                           echo "<td><span class='badge bg-danger'>$currentmtop - Expired</span></td>";
                        }

                        ?>
                        <?php 
                        $today = date("Y-m-d");
                        if ($currentfranchise=='0000-00-00') {
                          echo "<td><span class='badge bg-warning'>No Franchise record</span></td>";
                        }
                        elseif ($currentfranchise > $today){

                           echo "<td><span class='badge bg-success'>$currentfranchise - Registered</span></td>";
                        }
                        else{

                           echo "<td><span class='badge bg-danger'>$currentfranchise - Expired</span></td>";
                        }

                        ?>
                       
                      </tr>
                <?php }}?>      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Tricycle Population <span>| This year</span></h5>

                   <div class="card-body">
                                   <h4 class="small font-weight-bold">Red | <?php echo $redcount; ?><span
                                            class="float-right"><?php echo $redpercent; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $redpercent;?>%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Yellow | <?php echo $yellowcount; ?><span
                                            class="float-right"><?php echo $yellowpercent; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $yellowpercent; ?>%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Blue | <?php echo $bluecount; ?><span
                                            class="float-right"><?php echo $bluepercent; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $bluepercent; ?>%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">White | <?php echo $whitecount; ?> <span
                                            class="float-right"><?php echo $whitepercent; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $whitepercent; ?>%; background-color: #eeebd9;"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Green | <?php echo $greencount; ?><span
                                            class="float-right"><?php echo $greenpercent; ?>%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $greenpercent; ?>%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
          

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">
<?php
                     $sql33 = "SELECT * from transactions ORDER BY id DESC limit 5";
                    $result = $conn->query($sql33);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];  
                            $transaction = $row['transaction']; 
                            $transactdate = $row['date']; 
                            $status = $row['status'];
                            $rectrikeid = $row['trikeid'];
                      

  ?>

                <div class="activity-item d-flex">
                  <div class="activite-label"> <?php
                    $now = time();
                    $your_date = strtotime($transactdate);
                    $datediff = $now - $your_date;
                    if (round($datediff / (60 * 60 * 24))==0) {
                     echo "Today";
                    }else{
                   echo round($datediff / (60 * 60 * 24))." Days";
                    }
                    ?>
</div>            

                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'>
                   
                  </i>
                  <div class="activity-content">
                    <?php echo $transaction; ?> <a href="profile.php?id=<?php echo  $rectrikeid; ?>" class="fw-bold text-dark">View</a>
                  </div>
                </div><!-- End activity item-->
<?php }}  ?>
               <!-- <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div> End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item
                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item
                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Tricycle violation <span>| This year</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine',
                          color: 'pink'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 5580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }

                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
             
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Blank|<span>blank</span></h5>

              <div class="news">
                Test</p>
                Test Test</p>
                Test Test Test</p>
                Test Test Test Test</p>
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

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
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>