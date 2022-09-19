<?php


                         
include 'include/controller.php';

if(isset($_SESSION['username'])){
    
      $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];

 
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $fetch_imgParts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $fetch_imgParts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($fetch_imgParts[1]);
    $img_name = uniqid() . '.jpeg';
  
    $file = $folderPath . $img_name;
    file_put_contents($file, $image_base64);

   $opid = $_POST['operatorid'];                    

                if ($opid != "") {


$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$xname  = $_POST['xname'];

$nounit  = $_POST['nounit'];
if ($nounit== "no unit") {
  $fileno = 'No unit';
$plateno = 'No unit';
$engineno = 'No unit';
$chasisno = 'No unit';
$maker = 'No unit';
$motorcolor = 'No unit';
$piston = 'No unit';
$cor = 'No unit';
$ornum = 'No unit';
}else{
$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];
}
$applicationdate = $_POST['applicationdate'];
$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];
$toda = $_POST['toda'];

$hasparking = $_POST['hasparking'];
if ($hasparking=="") {
  $parking="No";
}else{

  $parking="Yes";
}
$acquisitiondate = $_POST['acquisitiondate'];
$yearmodel = $_POST['yearmodel'];

 $selectquery = "SELECT `color` from toda where `toda` = '$toda'";
  $result = $conn->query($selectquery);
                      if($result->num_rows> 0){
                        while($row = $result->fetch_assoc()) {
                            $sidecarcolor = $row['color'];
                        }
                      }

$sql = "INSERT INTO `tricycle` (`id`,`fname`, `mname`, `lname`,`extname`,`mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`,`parking`, `parkinglocation`, `acquisitiondate`, `yearmodel`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`,`toda`,`sidecarcolor`,`classification`,`status`) VALUES (NULL,'$fname', '$mname', '$lname','$xname', '$fileno', '$plateno', '$engineno', '$chasisno', '$maker','$motorcolor', '$piston', '$cor', '$ornum','$parking','$hasparking','$acquisitiondate','$yearmodel', '$applicationdate', '$brgycode', '$bdynumber', '$opid','$toda','$sidecarcolor','$classification','$nounit')";

if ($conn->query($sql) === TRUE) { 
 $last_idtrike = $conn->insert_id;

 $sql2 = "INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$last_idtrike')";

if ($conn->query($sql2) === TRUE) { 

  $sql3 = "INSERT INTO `franchiserecord` (`id`, `franchiseapplication`, `franchiseapproval`, `franchiseexpiration`, `trikeid`) VALUES (NULL, '$applicationdate', '', '', '$last_idtrike')";

  $sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Added new unit', 'Added new unit', now(), 'done', '', '$rowprintid')";


if ($conn->query($sql3) === TRUE) { 


$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Created record', 'Created record', now(), 'done', '', '$last_idtrike')";
if ($conn->query($sqlt) === TRUE) {  

 echo "<script type='text/javascript'>alert(\"Successfully added Tricycle \")</script>";
           echo "<script>window.location.href='profile.php?id=$last_idtrike'</script>"; 
         }  else{
            echo "<script type='text/javascript'>alert(\"Data not inserted\")</script>";

}}}
}



                 
                }else{
  

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



$sql = "INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `gender`, `extname`, `address1`,`contactnumber`, `barangay`, `sfname`, `smname`, `slaname`, `bday`,`bloodtype`, `type`, `licensenum`, `licensetype`, `licensevalid`, `cedulanumber`, `cedulalocation`, `ceduladate`, `picname`) VALUES 
	(NULL, '$fname', '$mname', '$lname', '$gender', '$xname', '$address1', '$contactnum','$barangay', '$sfname', '$smname', '$slname', '$bday','$bloodtype', '$type', '$licensid', '$licensetype', '$expiration','$cedulanumber','$cedulalocation','$ceduladate', '$img_name')";

if ($conn->query($sql) === TRUE) {  


 
 $last_id = $conn->insert_id;

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$xname = $_POST['xname'];
$nounit  = $_POST['nounit'];
if ($nounit== "no unit") {
  $fileno = 'No unit';
$plateno = 'No unit';
$engineno = 'No unit';
$chasisno = 'No unit';
$maker = 'No unit';
$motorcolor = 'No unit';
$piston = 'No unit';
$cor = 'No unit';
$ornum = 'No unit';
}else{
$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];
}
$applicationdate = $_POST['applicationdate'];
$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];
$toda = $_POST['toda'];
$hasparking = $_POST['hasparking'];
if ($hasparking=="") {
  $parking="No";
}else{

  $parking="Yes";
}
$acquisitiondate = $_POST['acquisitiondate'];
$yearmodel = $_POST['yearmodel'];


 $selectquery = "SELECT `color` from toda where `toda` = '$toda'";
  $result = $conn->query($selectquery);
                      if($result->num_rows> 0){
                        while($row = $result->fetch_assoc()) {
                            $sidecarcolor = $row['color'];
                        }
                      }

$sql = "INSERT INTO `tricycle` (`id`,`fname`, `mname`, `lname`,`extname`,`mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`,`parking`, `parkinglocation`, `acquisitiondate`, `yearmodel`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`,`toda`,`sidecarcolor`,`classification`,`status`) VALUES (NULL,'$fname', '$mname', '$lname','$xname', '$fileno', '$plateno', '$engineno', '$chasisno', '$maker','$motorcolor', '$piston', '$cor', '$ornum','$parking','$hasparking','$acquisitiondate','$yearmodel', '$applicationdate', '$brgycode', '$bdynumber', '$last_id','$toda','$sidecarcolor','$classification','$nounit')";

if ($conn->query($sql) === TRUE) { 
 $last_idtrike = $conn->insert_id;

 $sql2 = "INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$last_idtrike')";
if ($conn->query($sql2) === TRUE) { 

$sql3 = "INSERT INTO `franchiserecord` (`id`, `franchiseapplication`, `franchiseapproval`, `franchiseexpiration`, `trikeid`) VALUES (NULL, '$applicationdate', '', '', '$last_idtrike')";

if ($conn->query($sql3) === TRUE) { 


$sqlt = "INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES (NULL, 'Added tricycle', 'Added tricycle', now(), 'done', '', '$last_idtrike')";
if ($conn->query($sqlt) === TRUE) {  

 echo "<script type='text/javascript'>alert(\"Successfully added Operator and Tricycle \")</script>";
           echo "<script>window.location.href='profile.php?id=$last_idtrike'</script>"; 
         }  else{
            echo "<script type='text/javascript'>alert(\"Data not inserted\")</script>";
}


}}

}

}}








}








?>