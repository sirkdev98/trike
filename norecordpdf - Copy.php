


<?php


include 'include/controller.php';
include 'include/connection.php';
if(isset($_SESSION['username'])){
    
      $cidd = $_SESSION['id'];
      $userrole= $_SESSION['role'];
      $userfname= $_SESSION['fname'];
      $userlname= $_SESSION['lname'];
      $usermname= $_SESSION['mname'];
}


              


require_once('fpdf181/fpdf.php');
$tid = $_GET['id'];
$ornumcert =$_GET['ornum'];
$dropid  = $_GET['dropid'];

// Create connection

require_once('fpdi/src/autoload.php');
$pdf = new \setasign\Fpdi\Fpdi();
// initiate FPDI

// add a page
$pdf->setSourceFile('norecord.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->AddPage('P', 'A4'); 
// set the source file







          $sql = "SELECT * from dropped where dropid = $dropid";
      
    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                     while( $row = $result->fetch_assoc()){
                        

                            $dropid = $row['dropid'];  
                            $dmvfileno = $row['dmvfileno']; 
                            $dplateno = $row['dplateno']; 
                            $dengineno = $row['dengineno']; 
                            $dchasisno = $row['dchasisno']; 
                            $dmaker = $row['dmaker']; 
                            $dmotorcolor = $row['dmotorcolor']; 
                            $dpistondisp = $row['dpistondisp']; 
                            $dcor = $row['dcor']; 
                            $dropdate = $row['dropdate']; 
                            $trikeid = $row['trikeid']; 

}}







$sqlmayor = "SELECT * FROM `tbl_user` WHERE position ='Municipal Mayor' ORDER BY id DESC limit 1;";
$resultss = $conn->query($sqlmayor);
 if ($resultss->num_rows > 0) {
                        while($row = $resultss->fetch_assoc()) {
                             $mayorfirst_name = $row['first_name'];
                             $mayormiddle_name = $row['middle_name'];
                             $mayorlast_name = $row['last_name'];
                           }}

 $sqlmtop = "SELECT * FROM `mtop` WHERE trikeid ='$tid' ORDER BY id DESC limit 1;";
$resultss = $conn->query($sqlmtop);
 if ($resultss->num_rows > 0) {
                        while($row = $resultss->fetch_assoc()) {
                             $mtopexpiration = $row['mtopexpiration'];
                             $mtopdate = $row['mtopdate'];

$fomatmtopexpiration = date("F-d-Y", strtotime($mtopexpiration));
$fomatmtopdate= date("F-d-Y", strtotime($mtopdate));
  }
}
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
$pdf->SetTextColor(0,0,0);
$pdf->Cell( 200, 67,'',0,1);
$pdf->Cell( 12, 67,'',0,0);
$pdf->MultiCell(160, 7,'This is to certify that '.$fname.' '.$mname.' '.$lname.' of '.$opaddress1.' Orani,Bataan has "NO RECORDS" on File Line here in this Municipality, described as follows:');


$pdf->SetFont('Arial');
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(88, 107);
$pdf->Write(0, $dmaker);


$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(88, 113);
$pdf->Write(0, $dengineno);

        
$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(88, 119);
$pdf->Write(0, $chasisno);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(88, 125);
$pdf->Write(0, '');

$day = date('d');
$month = date('F');
$year = date('Y');

$pdf->SetFont('Arial','B');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 147.5);
$pdf->Write(0, $day);

$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(50, 147.5);
$pdf->Write(0, $month.',  '.$year.'  at Orani Bataan with O.R. No.'.$ornumcert.'');








$pdf->SetFont('Arial','B');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(23, 190);
$pdf->Write(0, $userfname." ".$usermname." ".$userlname);




$pdf->Output('I', 'generated.pdf');



 




//




?>