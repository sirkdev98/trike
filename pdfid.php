


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');

$from = $_GET['from'];
$to = $_GET['to'];


$doid = $_GET['id'];

// Create connection

$pdf = new FPDF ('l','mm','A6');
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
                     }
                            


$bday = date("F-d-Y", strtotime($bday));



$pdf->Addpage();

 




//

//set font
$pdf->SetFont('BebasKai', '', 12);

//cell width, height, text, border, end line, [align]


if ($picname=="") {

}else{
  $pdf->Image('cpc.jpg',0,1,210,148);
}





$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,35,'',0,1);


$pdf->SetFont('BebasKai', '', 36);
$pdf ->Cell(38,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(5,2,$row['fname']."  ".$row['mname']." ".$row['lname'],0,1);
$pdf ->Cell(10,8.5,'',0,1);
$pdf ->SetTextColor(0,0,0);






$pdf->SetFont('BebasKai', '', 14);
$pdf ->Cell(100,10,'',0,0);
$pdf ->Cell(30,5,$toda,0,0);
$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(10,10,'',0,0);

$pdf ->Cell(10,5,'',0,1);

$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(30,10,'',0,0);
$pdf ->Cell(50,5,$bodynum,0,1);


$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(30,10,'',0,0);
$pdf ->Cell(50,5,$chasisno,0,1);



$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(30,10,'',0,0);
$pdf ->Cell(50,5,$engineno,0,1);


$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('BebasKai', '', 10);
$pdf ->Cell(35,10,'',0,0);
$pdf ->Cell(50,5,$type,0,1);
$pdf ->Cell(10,2,'',0,1);




}
$pdf->Output();




}


?>