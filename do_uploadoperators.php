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
  
    print_r($img_name);
  

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

 echo "<script type='text/javascript'>alert(\"Successfully added  \")</script>";
           echo "<script>window.location.href='driveroperatorprofile.php?id=$last_id'</script>"; 
         }  else{
             echo "<script type='text/javascript'>alert(\"Data not added please check.  \")</script>";

}


























echo $fname;


?>