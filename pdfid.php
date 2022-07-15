


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');



$doid = $_GET['id'];

// Create connection

$pdf = new FPDF ('l','mm',array(148,105));
$pdf->AddFont('BebasKai','','BebasKai.php');


 
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
                          $_SESSION['opslaname'] =  $slaname = $row['slaname']; 
                          $_SESSION['opbday'] =  $bday = $row['bday']; 
                          $_SESSION['optype'] = $type = $row['type']; 
                          $_SESSION['oplicensenum'] =  $licensenum = $row['licensenum']; 
                          $_SESSION['oplicensetype'] = $licensetype = $row['licensetype']; 
                          $_SESSION['oplicensevalid'] = $licensevalid = $row['licensevalid']; 
                          $_SESSION['oppicname'] =  $picname = $row['picname']; 
                          $_SESSION['addcheck'] = "driverexist";
                  
                            


$bday = date("F-d-Y", strtotime($bday));



$pdf->Addpage('P');

 $pdf->Image('frontid.jpg',0,0,105,148);




//

//set font
$pdf->SetFont('BebasKai', '', 12);

//cell width, height, text, border, end line, [align]
if ($picname=="") {

}else{
  $pdf->Image('upload/'.$picname,30,28,45,46);
}




$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,70,'',0,1);


$pdf->SetFont('BebasKai', '', 26);
$pdf ->Cell(1,1,'',0,0);
$pdf ->SetTextColor(255,255,255);
$pdf ->Cell(5,2,$row['fname']."  ".$row['mname']." ".$row['lname'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(8,20,'',0,1);
$pdf->SetFont('BebasKai', '', 32);
$pdf ->Cell(24,1,'',0,0);
$pdf ->SetTextColor(255,255,255);
$pdf ->Cell(5,2,$row['type'],0,1);




$pdf->Addpage('P');
 $pdf->Image('backid.jpg',0,0,105,148);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,29,'',0,1);


$pdf->SetFont('BebasKai', '', 16);
$pdf ->Cell(30,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['address1'].", ".$row['barangay'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,8,'',0,1);


$pdf->SetFont('BebasKai', '', 16);
$pdf ->Cell(30,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['licensenum'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,7,'',0,1);


$pdf->SetFont('BebasKai', '', 16);
$pdf ->Cell(30,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['bday'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf->Output();
   }
}





?>