


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');
$id = $_GET['id'];



// Create connection




$sql = "SELECT
  tricycle.id,
  tricycle.bodynum,
  tricycle.mvfileno,
  tricycle.plateno,
  tricycle.engineno,
  tricycle.chasisno,
  tricycle.maker,
  tricycle.motorcolor,
  tricycle.pistondisp,
  tricycle.cor,
  tricycle.ornum,
  tricycle.applicationdate,
  tricycle.brgycode,tricycle.toda, 
  tricycle.sidecarcolor, 
  tricycle.bodynum, 
  tricycle.inspectionstat,
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname, 
  driveroperator.lname, 
  driveroperator.type,
  driveroperator.picname,
  driveroperator.bday,
  driveroperator.gender,
  driveroperator.address1,
  driveroperator.barangay,
  driveroperator.licensenum,
  inspection.sidecar_windshield,
  inspection.funcitioning_horn,
  inspection.signal_lights,
  inspection.tail_lights,
  inspection.topchain_cover,
  inspection.whitered_headlights,
  inspection.light_inside,
  inspection.mufflers,
  inspection.roof,
  inspection.side_mirrors,
  inspection.upholstery,
  inspection.wheels,
  inspection.remarks
FROM tricycle
JOIN driveroperator
ON tricycle.operatorid = driveroperator.pid
JOIN inspection
ON tricycle.id = inspection.trikeid WHERE tricycle.id = '$id'";
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
                            $motorcolor = $row['motorcolor']; 
                            $pistondisp = $row['pistondisp']; 
                            $cor = $row['cor']; 
                            $ornum = $row['ornum']; 
                            $applicationdate = $row['applicationdate']; 
                            $brgycode = $row['brgycode']; 
                            $bodynum = $row['bodynum'];
                            $pid = $row['pid'];  
                            $fname = $row['fname']; 
                            $mname = $row['mname']; 
                            $lname = $row['lname']; 
                            $type = $row['type']; 
                            $picname = $row['picname']; 
                            $toda = $row['toda']; 
                            $sidecarcolor = $row['sidecarcolor']; 
                            $sidecar_windshield = $row['sidecar_windshield'];
                            $funcitioning_horn = $row['funcitioning_horn'];
                            $signal_lights = $row['signal_lights'];
                            $tail_lights = $row['tail_lights'];
                            $topchain_cover = $row['topchain_cover'];
                            $whitered_headlights = $row['whitered_headlights'];
                            $light_inside = $row['light_inside'];
                            $mufflers = $row['mufflers'];
                            $roof = $row['roof'];
                            $side_mirrors = $row['side_mirrors'];
                            $upholstery = $row['upholstery'];
                            $wheels = $row['wheels'];
                            $remarks = $row['remarks'];
                            $bday = $row['bday'];
                            $gender = $row['gender'];
                            $opaddress1 = $row['address1'];
                            $opbarangay = $row['barangay'];
                            $licensenum = $row['licensenum'];

$bday = date("F-d-Y", strtotime($bday));




}}




 




//
$pdf = new FPDF ('p','mm','a4');

$pdf->AddPage();

//set font
$pdf->SetFont('Arial', '', 12);

//cell width, height, text, border, end line, [align]
$pdf->Image('orani2.png',160,10,28);

$pdf->Image('orani.png',25,10,28);
$pdf->Image('Capture.png',8,270,200);

if ($picname=="") {

}else{
  $pdf->Image('upload/'.$picname,135,45,51,51);
}

$pdf ->Cell(72,10,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,5,'Republic of the Philippines',0,1);
$pdf ->Cell(79,10,'',0,0);
$pdf ->Cell(9,5,'Province of Bataan',0,1);

$pdf ->Cell(55,5,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(9,5,'MUNICIPAL GOVERNMENT OF ORANI',0,1);

$pdf ->Cell(52,6,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(9,6,'ORANI TRICYCLE REGULATORY OFFICE',0,1);

$pdf->SetFont('Arial', '', 12);



$pdf ->Cell(155,15,'',0,0);
$pdf ->Cell(50,15,'',0,1);





$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(5,1,'',0,0);
$pdf ->SetTextColor(0,0,255);
$pdf ->Cell(55,2,'OPERATORS INFORMATION',0,1);
$pdf ->Cell(10,5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'NAME',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$fname." ".$mname." ".$lname,0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'DATE OF BIRTH',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$bday,0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'GENDER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$gender,0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'ADDRESS',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$opbarangay.", ".$opbarangay,0,1);
$pdf ->Cell(10,2,'',0,1);


$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'LICENSE NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$licensenum,0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'CTC NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'TODA',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$toda,0,1);
$pdf ->Cell(10,2,'',0,1);


$pdf ->Cell(155,15,'',0,0);
$pdf ->Cell(50,15,'',0,1);


$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(5,1,'',0,0);
$pdf ->SetTextColor(0,0,255);
$pdf ->Cell(55,2,'UNIT INFORMATION',0,1);
$pdf ->Cell(10,5,'',0,1);
$pdf ->SetTextColor(0,0,0);


$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'APPLICATION DATE',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$applicationdate,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(45,5,'MTOP NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'--',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'BODY NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$bodynum,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(45,5,'MTOP VALIDITY',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'--',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'PLATE NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$plateno,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(45,5,'FRANCHISE VALIDITY',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'--',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'MOTOR COLOR',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$motorcolor,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);


$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'SIDECAR COLOR',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$sidecarcolor,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);//TEXT TITLE
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'',0,0);//TEXT 2ND COLUMNT
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'ENGINE NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$engineno,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);

$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'CHASIS NUMBER',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,$chasisno,0,0);
$pdf->SetFont('Arial', 'B', 10);
$pdf ->Cell(5,10,'',0,0);
$pdf ->Cell(30,5,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(50,5,'',0,0);
$pdf ->Cell(50,5,'',0,1);
$pdf ->Cell(10,2,'',0,1);




$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,5,'',0,1);

$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,5,'',0,1);

$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,5,'',0,1);




$pdf->Output();



?>