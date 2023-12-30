


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




// Create connection

require_once('fpdi/src/autoload.php');
$pdf = new \setasign\Fpdi\Fpdi();
// initiate FPDI

// add a page
$pdf->setSourceFile('orderpdf.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->AddPage('P', 'A4'); 
// set the source file
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
$sql = "SELECT * FROM dropped where dropid = $tid";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $dropid = $row['dropid'];  
                           
                            $dchasisno = $row['dchasisno']; 
                            $dcor = $row['dcor']; 
                            $dengineno = $row['dengineno']; 
                            $dmaker = $row['dmaker']; 
                            $dmotorcolor = $row['dmotorcolor']; 
                            $dmvfileno = $row['dmvfileno']; 
                            $dornum = $row['dornum']; 
                            $dpistondisp = $row['dpistondisp']; 
                            $dplateno = $row['dplateno'];
                            $dropcedula = $row['dropcedula']; 
                            $dropdate = $row['dropdate'];
                            $dropid = $row['dropid'];
                            $dyearmodel = $row['dyearmodel'];
                            $remarks = $row['remarks'];
                            $trikeid = $row['trikeid'];

                           




}}
$sqlop = "SELECT * FROM `tricycle` WHERE id = $trikeid";
$resultss = $conn->query($sqlop);
 if ($resultss->num_rows > 0) {
                        while($row = $resultss->fetch_assoc()) {
                             $opfname = $row['fname'];
                             $opmname = $row['mname'];
                             $oplname = $row['lname'];
                             $opextname = $row['extname'];
                           }}


$pdf->useTemplate($tplIdx);
// now write some text above the imported page

$pdf->Image('esig.png',128,193,50);


$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(74, 83);
$pdf->Write(0,$dmaker);


$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(86, 92);
$pdf->Write(0,$dengineno);

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(22, 101);
$pdf->Write(0,$dchasisno);

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(99, 101);
$pdf->Write(0,$dplateno);

   


$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(129, 210);
$pdf->Write(0, $mayorfirst_name." ".$mayormiddle_name." ".$mayorlast_name);
$pdf->SetFont('Arial','');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(138, 214);
$pdf->Write(0, 'Municipal Mayor');



$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 150);
$pdf->Write(0, $opfname." ".$opmname." ".$oplname." ".$opextname);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(38, 155);
$pdf->Write(0, 'PETITIONER');

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(54, 110);
$pdf->Write(0, $dropid.$trikeid);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(38, 155);
$pdf->Write(0, 'PETITIONER');




$pdf->Output('I', 'generated.pdf');



 




//




?>