


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
  tricycle.pistondisp,
  tricycle.cor,
  tricycle.ornum,
  tricycle.franchisedate,
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
                            $pistondisp = $row['pistondisp']; 
                            $cor = $row['cor']; 
                            $ornum = $row['ornum']; 
                            $franchisedate = $row['franchisedate']; 
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
$pdf ->Cell(72,10,'',0,0);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,5,'Republic of the Philippines',0,1);
$pdf ->Cell(79,10,'',0,0);
$pdf ->Cell(9,5,'Province of Bataan',0,1);

$pdf ->Cell(55,5,'',0,0);
$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(9,5,'MUNICIPAL GOVERNMENT OF ORANI',0,1);

$pdf ->Cell(45,6,'',0,0);
$pdf->SetFont('Arial', 'B', 11);
$pdf ->Cell(9,6,'OFFICE OF THE TRICYCLE REGULATORY OFFICER',0,1);


$pdf ->Cell(51,5,'',0,1);
$pdf ->Cell(51,5,'',0,1);
$pdf ->Cell(60,5,'',0,0);
$pdf->SetFont('Arial', 'UB', 14);
$pdf ->Cell(9,5,'G U A R A N T E E   L E T T E R',0,1);

$pdf->SetFont('Arial', '', 12);



$pdf ->Cell(50,10,'',0,1);
$pdf ->Cell(155,10,'',0,0);
$pdf ->Cell(50,10,'',0,1);





$pdf->SetFont('Arial', 'B', 12);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(55,5,'ORANI DISTRICT HOSPITAL',0,1);
$pdf->SetFont('Arial', '', 10);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(65,5,'Lourdes St., Ma. Fe',0,1);
$pdf ->Cell(10,10,'',0,0);
$pdf ->Cell(50,5,'Orani, Bataan',0,1);



$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(15,5,'',0,1);
$pdf ->Cell(15,5,'',0,1);
$pdf ->Cell(10,5,'',0,0);
$pdf ->Cell(50,10,"Dear Ma'am/Sir:",0,1);

$pdf ->Cell(20,5,'',0,0);
$pdf ->Cell(50,8,"The Municipality of Orani thru the Municipality Social Welafare and Development office",0,1);
$pdf ->Cell(10,8,'',0,0);
$pdf ->Cell(60,8,"guarantees to pay the amount of ",0,0);




$pdf->Output();



?>