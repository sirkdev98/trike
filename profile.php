<?php 
  include '/include/controller.php';

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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-sliders"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
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
      </li><!-- End Components Nav -->


    </ul>
  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tricycle</li>
          <li class="breadcrumb-item active">Tricycle Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <?php
    $tid = $_GET['id'];
   
    include '\include\connection.php';
     $sql = "SELECT tricycle.id, tricycle.bodynum, tricycle.mvfileno, tricycle.plateno, tricycle.engineno, tricycle.chasisno, tricycle.maker, tricycle.pistondisp, tricycle.cor, tricycle.ornum, tricycle.franchisedate, tricycle.brgycode, tricycle.toda, tricycle.sidecarcolor, tricycle.bodynum, driveroperator.fname, driveroperator.mname, driveroperator.lname, driveroperator.type, driveroperator.picname from tricycle right join driveroperator on tricycle.operatorid=driveroperator.pid WHERE tricycle.id = '$tid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
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
                            $franchisedate = $row['franchisedate']; 
                            $brgycode = $row['brgycode']; 
                            $bodynum = $row['bodynum']; 
                            $fname = $row['fname']; 
                            $mname = $row['mname']; 
                            $lname = $row['lname']; 
                            $type = $row['type']; 
                            $picname = $row['picname']; 
                            $toda = $row['toda']; 
                            $sidecarcolor = $row['sidecarcolor']; 


 



}}
     ?>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="upload/<?php echo $picname; ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $fname." ".$lname ; ?></h2>
              <h3><?php echo $type; ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-transactions">Transactions</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>
                 <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Tricycle Details</h5>
                  <p class="small fst-italic">Below are the details for the selected tricycle</p>

                  <h5 class="card-title"><?php echo $toda; ?> - <?php echo $bodynum; ?></h5>

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
                    <div class="col-lg-9 col-md-8"><?php echo $franchisedate; ?></div>
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
                  <p class="small fst-italic">Printed MTOP 05/23/2022</p>
                  <p class="small fst-italic">Transfered ownership to ---------</p>

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
      <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Driver List</h5>
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
              <h5 class="card-title">Driver / Operator</h5>

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
                      <option value="DRIVER">DRIVER</option>
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
         <form method="POST" action="submit">
              

  
  
        
     
         
      

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
                      <option value="DRIVER">DRIVER</option>
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
                <button class="btn btn-primary" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl">ADD NEW DRIVER </button>

                <button class="btn btn-warning" type="button" data-toggle="modal"  data-target=".bd-example-modal-xl2">ADD EXISTING DRIVER </button>
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
</body>

</html>