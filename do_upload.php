<?php
  
include '\include\controller.php';
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $fetch_imgParts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $fetch_imgParts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($fetch_imgParts[1]);
    $img_name = uniqid() . '.png';
  
    $file = $folderPath . $img_name;
    file_put_contents($file, $image_base64);
  
    print_r($img_name);
  

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
$licensetype = $_POST['licensetype'];
$expiration = $_POST['expiration'];
$contactnum = $_POST['contactnum'];

$sql = "INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `extname`, `address1`,`contactnumber`, `barangay`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`,`picname`) VALUES 
	(NULL, '$fname', '$mname', '$lname', '$xname', '$address1', '$barangay','$contactnum', '$sfname', '$smname', '$slname', '$bday', '$type', '$licensid', '$licensetype', '$expiration', '$img_name')";

if ($conn->query($sql) === TRUE) {  
 
 $last_id = $conn->insert_id;

$fileno = $_POST['fileno'];
$plateno = $_POST['plateno'];
$engineno = $_POST['engineno'];
$chasisno = $_POST['chasisno'];
$maker = $_POST['maker'];
$piston = $_POST['piston'];
$cor = $_POST['cor'];
$ornum = $_POST['ornum'];
$dateofissue = $_POST['dateofissue'];
$brgycode = $_POST['brgycode'];
$bdynumber = $_POST['bdynumber'];
$classification = $_POST['classification'];

$sql = "INSERT INTO `tricycle` (`id`,`fname`, `mname`, `lname`,`mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `pistondisp`, `cor`, `ornum`, `franchisedate`, `brgycode`, `bodynum`, `operatorid`,`toda`,`sidecarcolor`,`classification`) VALUES (NULL,'$fname', '$mname', '$lname', '$fileno', '$plateno', '$engineno', '$chasisno', '$maker', '$piston', '$cor', '$ornum', '$dateofissue', '$brgycode', '$bdynumber', '$last_id','','','$classification')";

if ($conn->query($sql) === TRUE) { 
 $last_idtrike = $conn->insert_id;

 $sql2 = "INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$last_idtrike')";

if ($conn->query($sql2) === TRUE) { 
 echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='profile.php?id=$last_idtrike'</script>"; 
         }  else{

}
}


}






















echo $fname;


?>