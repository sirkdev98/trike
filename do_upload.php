<?php


                         
include 'include/controller.php';
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

$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];
$applicationdate = $_POST['applicationdate'];
$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];
$toda = $_POST['toda'];

 $selectquery = "SELECT `color` from toda where `toda` = '$toda'";
  $result = $conn->query($selectquery);
                      if($result->num_rows> 0){
                        while($row = $result->fetch_assoc()) {
                            $sidecarcolor = $row['color'];
                        }
                      }

$sql = "INSERT INTO `tricycle` (`id`,`fname`, `mname`, `lname`,`extname`,`mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`,`toda`,`sidecarcolor`,`classification`) VALUES (NULL,'$fname', '$mname', '$lname','$xname', '$fileno', '$plateno', '$engineno', '$chasisno', '$maker','$motorcolor', '$piston', '$cor', '$ornum', '$applicationdate', '$brgycode', '$bdynumber', '$opid','$toda','$sidecarcolor','$classification')";

if ($conn->query($sql) === TRUE) { 
 $last_idtrike = $conn->insert_id;

 $sql2 = "INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$last_idtrike')";

if ($conn->query($sql2) === TRUE) { 

  $sql3 = "INSERT INTO `franchiserecord` (`id`, `franchiseapplication`, `franchiseapproval`, `franchiseexpiration`, `trikeid`) VALUES (NULL, '$applicationdate', '', '', '$last_idtrike')";

if ($conn->query($sql3) === TRUE) { 
 echo "<script type='text/javascript'>alert(\"Successfully added Tricycle \")</script>";
           echo "<script>window.location.href='profile.php?id=$last_idtrike'</script>"; 
         }  else{
            echo "<script type='text/javascript'>alert(\"Data not inserted\")</script>";

}}}




                 
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
$licensetype = $_POST['licensetype'];
$expiration = $_POST['expiration'];


$sql = "INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `gender`, `extname`, `address1`,`contactnumber`, `barangay`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`,`picname`) VALUES 
	(NULL, '$fname', '$mname', '$lname', '$gender', '$xname', '$address1', '$contactnum','$barangay', '$sfname', '$smname', '$slname', '$bday', '$type', '$licensid', '$licensetype', '$expiration', '$img_name')";

if ($conn->query($sql) === TRUE) {  


 
 $last_id = $conn->insert_id;

$fname = $_POST['fname'];
$fname = $_POST['mname'];
$lname = $_POST['lname'];
$xname = $_POST['xname'];
$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$motorcolor = $_POST['motorcolor'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];
$applicationdate = $_POST['applicationdate'];
$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];
$toda = $_POST['toda'];

 $selectquery = "SELECT `color` from toda where `toda` = '$toda'";
  $result = $conn->query($selectquery);
                      if($result->num_rows> 0){
                        while($row = $result->fetch_assoc()) {
                            $sidecarcolor = $row['color'];
                        }
                      }

$sql = "INSERT INTO `tricycle` (`id`, `fname`, `mname`, `lname`, `extname`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`, `toda`, `sidecarcolor`, `inspectionstat`, `classification`) VALUES (NULL, '$fname', '$mname', '$lname', '$xname', '$fileno', '$plateno', '$engineno', '$chasisno', '$maker', '$motorcolor', '$piston', '$cor', '$ornum', '$applicationdate', '$brgycode', '$bdynumber', '$last_id', '$toda ', '$sidecarcolor', '', '$classification')";

if ($conn->query($sql) === TRUE) { 
 $last_idtrike = $conn->insert_id;

 $sql2 = "INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$last_idtrike')";
if ($conn->query($sql2) === TRUE) { 

$sql3 = "INSERT INTO `franchiserecord` (`id`, `franchiseapplication`, `franchiseapproval`, `franchiseexpiration`, `trikeid`) VALUES (NULL, '$applicationdate', '', '', '$last_idtrike')";

if ($conn->query($sql3) === TRUE) { 
 echo "<script type='text/javascript'>alert(\"Successfully added Tricycle \")</script>";
           echo "<script>window.location.href='profile.php?id=$last_idtrike'</script>"; 
         }  else{
            echo "<script type='text/javascript'>alert(\"Data not inserted\")</script>";
}


}}



}}

















?>