


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require('fpdf181/fpdf.php');

$from = $_GET['from'];
$to = $_GET['to'];




// Create connection

$pdf = new FPDF ('l','mm','A5');
$pdf->AddFont('BebasKai','','BebasKai.php');



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
ON tricycle.id = inspection.trikeid WHERE tricycle.applicationdate BETWEEN '$from' and '$to'";
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



$pdf->Addpage();

 




//

//set font
$pdf->SetFont('BebasKai', '', 12);

//cell width, height, text, border, end line, [align]
$pdf->Image('orani2.png',160,10,28);

$pdf->Image('orani.png',25,10,28);
$pdf->Image('Capture.png',8,270,200);

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