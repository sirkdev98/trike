


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


$pdf->setSourceFile('dropping.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->AddPage('P', 'A4'); 

$pdf->useTemplate($tplIdx);
// now write some text above the imported page

$pdf->Image('esig.png',128,193,50);


$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(74, 83);
$pdf->Write(0,$dmaker);


$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(86, 92);
$pdf->Write(0,$dengineno);

$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(22, 101);
$pdf->Write(0,$dchasisno);

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(102, 101);
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
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(54 , 110);
$pdf->Write(0, $dropid);

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(78 , 110);
$pdf->Write(0, $dropdate);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(38, 155);
$pdf->Write(0, 'PETITIONER');




$pdf->setSourceFile('dropping.pdf');
$tplIdx2 = $pdf->importPage(2);
$pdf->AddPage('P', 'A4'); 
$pdf->useTemplate($tplIdx2);


$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(120, 205);
$pdf->Write(0, $opfname." ".$opmname." ".$oplname." ".$opextname);
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(140, 210);
$pdf->Write(0, 'PETITIONER');


$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(50, 95);
$pdf->Write(0,$dmaker);


$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(135, 95);
$pdf->Write(0,$dropid);


$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 145);
$pdf->Write(0,$dmaker);

$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 154);
$pdf->Write(0,$dengineno);

$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 164);
$pdf->Write(0,$dchasisno);

$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 174);
$pdf->Write(0,$dplateno);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0, 0, 0);
$pdf ->Cell(135,45,'',0,1);
$pdf ->Cell(25,16,'',0,0);
$pdf ->Cell(5,4,'SUBSCRIBE AND SWORN to before me this '.date('jS').' day of '. date('F, Y').' here at Orani,
',0,1);
$pdf ->Cell(50,1,'',0,1);
$pdf ->Cell(5,16,'',0,0);
$pdf ->Cell(5,5,'Bataan',0,1);



$pdf->Image('esig.png',135,235,50);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(135, 250);
$pdf->Write(0, $mayorfirst_name." ".$mayormiddle_name." ".$mayorlast_name);
$pdf->SetFont('Arial','');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(145, 255);
$pdf->Write(0, 'Municipal Mayor');


$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 248);
$pdf->Write(0,"CTC No.:   ".$dropcedula);
$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 252);
$pdf->Write(0,"Issued On: ".$dropdate);
$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(20, 256);
$pdf->Write(0,"Issued At:  "."Orani Bataan");






$pdf->Output('I', 'generated.pdf');

 




//




?>