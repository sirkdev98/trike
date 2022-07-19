


<?php
include 'include/controller.php';
include 'include/connection.php';
              


require_once('fpdf181/fpdf.php');
$tid = $_GET['id'];



// Create connection

require_once('fpdi/src/autoload.php');
$pdf = new \setasign\Fpdi\Fpdi();
// initiate FPDI

// add a page
$pdf->setSourceFile('form.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->AddPage('P', array(215.9,330.2)); 
// set the source file


// import page 1
// use the imported page and place it at position 10,10 with a width of 100 mm



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
  tricycle.brgycode,
  tricycle.toda, 
  tricycle.sidecarcolor, 
  tricycle.bodynum, 
  tricycle.inspectionstat,
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname, 
  driveroperator.lname,
  driveroperator.sfname,
  driveroperator.smname, 
  driveroperator.slaname,
  driveroperator.extname,  
  driveroperator.type,
  driveroperator.picname,
  driveroperator.bday,
  driveroperator.gender,
  driveroperator.address1,
  driveroperator.barangay,
  driveroperator.licensenum,
  driveroperator.contactnumber,
  franchiserecord.franchiseapproval,
  franchiserecord.franchiseexpiration,
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
JOIN franchiserecord 
ON tricycle.id = franchiserecord.trikeid  
JOIN inspection
ON tricycle.id = inspection.trikeid WHERE tricycle.id = '$tid'";
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
                            $sfname = $row['sfname']; 
                            $smname = $row['smname']; 
                            $slname = $row['slaname'];
                            $extname  =$row['extname'];
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
                            $contactnumber = $row['contactnumber'];

                               $franchiseapproval = $row['franchiseapproval'];
                            $franchiseexpiration = $row['franchiseexpiration'];

$bday = date("F-d-Y", strtotime($bday));




}}

$pdf->useTemplate($tplIdx);
// now write some text above the imported page
$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(56, 101);
$pdf->Write(0, $fname);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(105, 101);
$pdf->Write(0, $fname);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 101);
$pdf->Write(0, $lname);


$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(190, 101);
$pdf->Write(0, $extname);


$pdf->SetFont('Arial','',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(40, 110);
$pdf->Write(0, $opaddress1.", ".$opbarangay);


$pdf->SetFont('Arial','',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 107);
$pdf->Write(0, $contactnumber);


if ($gender=="FEMALE") {
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(156.55, 112);
$pdf->Write(0, 'x');
}elseif ($gender=="MALE" ) {
$pdf->SetFont('Arial','B',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(131.5, 112);
$pdf->Write(0, 'x');  
}

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(56, 122);
$pdf->Write(0, $sfname);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(105, 122);
$pdf->Write(0, $smname);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 122);
$pdf->Write(0, $slname);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(12, 132);
$pdf->Write(0, $mvfileno);


$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 132);
$pdf->Write(0, $plateno);


$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 132);
$pdf->Write(0, $engineno);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 132);
$pdf->Write(0, $chasisno);
//2nd line unit info

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(12, 142);
$pdf->Write(0, $maker);


$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 142);
$pdf->Write(0, $pistondisp);


$pdf->SetFont('Arial','',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(110, 142);
$pdf->Write(0, $cor);

$pdf->SetFont('Arial','',9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(150, 142);
$pdf->Write(0, $ornum);


$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(190, 142);
$pdf->Write(0, '2--');

//franchise dates
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 149);
$pdf->Write(0, $franchiseapproval );


$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 156);
$pdf->Write(0, $franchiseexpiration );



$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(132, 153);
$pdf->Write(0, $brgycode);



$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(140, 153);
$pdf->Write(0, $bodynum);


$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(160, 153);
$pdf->Write(0, 'GUECO-PARAISOTODA
');



$sql = "SELECT
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname,
  driveroperator.lname,
  driveroperator.licensenum,
  driveroperator.licensevalid,
  driveroperator.barangay,
  driveroperator.address1,
  driveroperator.gender,
  driveroperator.bday,
  tricycle.bodynum,
  drivers.id
FROM driveroperator
JOIN drivers
ON driveroperator.pid = drivers.driverid
JOIN tricycle
ON tricycle.bodynum = drivers.bdynumber WHERE tricycle.id = '$tid'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $did = $row['pid'];  
                            $dfname = $row['fname']; 
                            $dmname = $row['mname']; 
                            $dlname = $row['lname']; 
                            $dlicensenum = $row['licensenum']; 
                            $dbarangay = $row['barangay']; 
                            $dbday = $row['bday']; 
                            $tbldriversid = $row['id'];
                            $daddress1 = $row['address1'];
                            $dlicensevalid = $row['licensevalid'];
                            $dgender = $row['gender'];
  


$pdf->SetFont('Arial', '', 14);
$pdf ->Cell(5,12,'',0,1);
$pdf ->Cell(50,1,'',0,0);
$pdf ->SetTextColor(0,0,0);
$pdf ->Cell(40,2,$dfname,0,0);
$pdf ->Cell(55,2,$dmname,0,0);
$pdf ->Cell(10,2,$dlname,0,0);
$pdf ->Cell(10,8,'',0,1);
$pdf ->Cell(45,1,'',0,0);
$pdf ->Cell(35,0,$daddress1.", ".$dbarangay,0,1);

$pdf ->Cell(10,5,'',0,1);
$pdf ->Cell(10,4,'',0,1);
$pdf ->Cell(30,1,'',0,0);
$pdf ->Cell(120,2,$dlicensenum,0,0);
$pdf->SetFont('Arial', '', 12);
$pdf ->Cell(5,2,'O+',0,1);
$pdf ->Cell(100,1,'',0,0);
$pdf->SetFont('Arial', '', 13);
$pdf ->Cell(30,0,date("m-d-Y", strtotime($dlicensevalid)),0,1);

if ($dgender=="MALE") {
	$pdf->SetFont('Arial', '', 10);
	$pdf ->Cell(151.5,1,'',0,0);
$pdf ->Cell(30,5,'x',0,0);
}elseif ($dgender=="FEMALE" ) {
	$pdf->SetFont('Arial', '', 10);
	$pdf ->Cell(170.5,1,'',0,0);
$pdf ->Cell(30,2,'x',0,0);
}
$pdf ->Cell(10,1,'',0,1);
        

}

}













$pdf->Output('I', 'generated.pdf');



 




//




?>