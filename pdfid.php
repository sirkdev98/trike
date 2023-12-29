


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');



$doid = $_GET['id'];
$bodynum = $_GET['bdynum'];


// Create connection

$pdf = new FPDF ('l','mm',array(133.35,95.25));
$pdf->AddFont('BebasKai','','BebasKai.php');
$pdf->AddFont('MontseratBold','','MontseratBold.php');
$pdf->AddFont('Montserat','','Montserat.php');
$pdf->AddFont('montsemibold','','montsemibold.php');

 
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
                          $_SESSION['extname'] =  $extname = utf8_encode($row['extname']); 
                          $_SESSION['bloodtype'] =  $bloodtype = $row['bloodtype']; 
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

 $pdf->Image('frontid.jpg',0,0,95.25,133.35);




//

//set font
$pdf->SetFont('MontseratBold', '', 12);

//cell width, height, text, border, end line, [align]
if ($picname=="") {

}else{
  $pdf->Image('upload/'.$picname,23,23,48,45);
}


$mini = mb_substr($row['mname'], 0, 1);

$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(6,58,'',0,1);


$pdf->SetFont('montsemibold', '', 24);

$pdf ->SetTextColor(255,255,255);
/*$pdf ->MultiCell(80,6,$row['fname']."  ".$mini.".",'C');*/

$pdf ->Cell(0,0,utf8_decode($row['fname'])."  ".$mini.".",0,1,'C');
$pdf ->Cell(0,15,utf8_decode ($lname." ".$extname),0,1,'C');

$pdf ->SetTextColor(0,0,0);
$pdf ->SetTextColor(255,255,255);

$pdf->SetFont('montsemibold', '', 36);
$pdf ->Cell(0,23,$bodynum,0,1,'C');
$pdf->SetFont('montsemibold', '', 20);
$pdf ->SetTextColor(255,255,255);
$pdf ->Cell(0,2,$row['type'],0,1,'C');




$pdf->Addpage('P');
 $pdf->Image('backid.jpg',0,0,95.25,133.35);


$pdf ->Cell(50,4,'',0,1);
$pdf ->Cell(8,24,'',0,1);


$pdf->SetFont('montsemibold', '', 9);
$pdf ->Cell(5,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf->SetXY(14, 35);
$pdf ->MultiCell(65, 5,$row['address1'], 0, 1, 0);

$pdf ->Cell(5,3,'',0,0);
$pdf ->Cell(4,3,' ',0,1);//dito ang barangay dati
$pdf ->Cell(10,2,'',0,1);
$pdf ->SetTextColor(0,0,0);
$pdf->SetFont('montsemibold', '', 12);

$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,8,'',0,1);


$pdf->SetFont('BebasKai', '', 16);

$pdf ->SetTextColor(0,0,0);
$pdf->SetXY(16,58);
$pdf ->MultiCell(65, 5,$row['licensenum'],0,'C');

$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,4,'',0,1);


$pdf->SetFont('BebasKai', '', 16);
$pdf ->Cell(26,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['bday'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,7,'',0,1);

$pdf->SetFont('BebasKai', '', 28);
$pdf ->Cell(34,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['bloodtype'],0,1);

$pdf ->SetTextColor(0,0,0);



$pdf->Output();
   }
}





?>