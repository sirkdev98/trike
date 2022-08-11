


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');



$doid = $_GET['id'];
$bodynum = $_GET['bdynum'];


// Create connection

$pdf = new FPDF ('l','mm',array(148,105));
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
$pdf->SetFont('MontseratBold', '', 12);

//cell width, height, text, border, end line, [align]
if ($picname=="") {

}else{
  $pdf->Image('upload/'.$picname,26,26,53,47);
}




$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(6,64,'',0,1);


$pdf->SetFont('montsemibold', '', 16);

$pdf ->SetTextColor(255,255,255);
$pdf ->MultiCell(85,6,$row['fname']."  ".$row['mname']." ".$row['lname'],'C');
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);
$pdf ->SetTextColor(255,255,255);

$pdf->SetFont('montsemibold', '', 36);
$pdf ->Cell(0,26,'14-0251',0,1,'C');
$pdf->SetFont('montsemibold', '', 20);
$pdf ->SetTextColor(255,255,255);
$pdf ->Cell(0,2,$row['type'],0,1,'C');




$pdf->Addpage('P');
 $pdf->Image('backid.jpg',0,0,105,148);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,29,'',0,1);


$pdf->SetFont('montsemibold', '', 12);
$pdf ->Cell(5,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['address1'].", ".$row['barangay'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(8,8,'',0,1);


$pdf->SetFont('BebasKai', '', 16);

$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(0,2,$row['licensenum'],0,1,'C');
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