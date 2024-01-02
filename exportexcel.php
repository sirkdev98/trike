<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["print"])){
$from = $_POST['startDatePicker'];
   $to = $_POST['endDatePicker'];
header ('location:cpcpdfall.php?from='.$from.'&to='.$to.'');


}


elseif(isset($_POST["export"]))
{
 
  $from = $_POST['startDatePicker'];
   $to = $_POST['endDatePicker'];
  $output = '';
    $sql ="SELECT * FROM `tricycle` WHERE applicationdate BETWEEN '$from' AND '$to'";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Fname</th>
                        <th>Mname</th> 
                        <th>Lname</th> 
                        <th>Full Name</th> 
                        <th>Motor Number</th>   
                        <th>Chasis Number</th>  
                        <th>Toda</th>  
                        <th>Body Number</th>  
                        <th>Application date</th>
                       
    
                    </tr>
  ';
  while ($row = $query->fetch_assoc())
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["mname"].'</td>  
                         <td>'.$row["lname"].'</td> 
                         <td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>
                         <td>'.$row["engineno"].'</td>
                         <td>'.$row["chasisno"].'</td>   
                         <td>'.$row["toda"].'</td>  
                         <td>'.$row["brgycode"].'-'.$row["bodynum"].'</td>  
                         <td>'.$row["applicationdate"].'</td>
                        
                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }

elseif(isset($_POST["mtopdata"]))
{
 
  $from = $_POST['startDatePicker'];
   $to = $_POST['endDatePicker'];
  $output = '';
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
  tricycle.classification,  
  tricycle.bodynum, 
  tricycle.inspectionstat,
  tricycle.currentfranchise,
  tricycle.parking,
  tricycle.parkinglocation,
  tricycle.acquisitiondate,
  tricycle.yearmodel,
  tricycle.status,
  tricycle.toda,
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname, 
  driveroperator.lname, 
  driveroperator.extname, 
  driveroperator.type,
  driveroperator.picname,
  mtop.mtopdate,
  mtop.mtopnumber

FROM tricycle
JOIN driveroperator
ON tricycle.operatorid = driveroperator.pid
JOIN mtop
ON tricycle.id = mtop.trikeid WHERE mtop.status ='paid' and mtopdate BETWEEN '$from' AND '$to'";
                     $query = $conn->query($sql);
                        // output data of each row
                     
                       
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Fname</th>
                        <th>Mname</th> 
                        <th>Lname</th> 
                        <th>Full Name</th> 
                        <th>Brgy Code</th> 
                        <th>Body Number</th> 
                        <th>Toda</th> 
                        <th>MV File No</th> 
                        <th>Plate No</th> 
                        <th>Chasis No</th> 
                        <th>Engine No</th> 
                        <th>Maker</th> 
                        <th>Piston Disp</th> 
                        <th>COR</th> 
                        <th>OR No</th> 
                        <th>MTOP Number</th> 
                        <th>MTOP Date</th> 
                        

                       
    
                    </tr>
  ';
  while ($row = $query->fetch_assoc())
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["mname"].'</td>  
                         <td>'.$row["lname"].'</td> 
                         <td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>
                         <td>'.$row["brgycode"].'</td>
                         <td>'.$row["bodynum"].'</td>
                         <td>'.$row["toda"].'</td>
                         <td>'.$row["mvfileno"].'</td>
                         <td>'.$row["plateno"].'</td>
                         <td>'.$row["chasisno"].'</td>
                         <td>'.$row["engineno"].'</td>
                         <td>'.$row["maker"].'</td>
                         <td>'.$row["pistondisp"].'</td>
                         <td>'.$row["cor"].'</td>
                         <td>'.$row["ornum"].'</td>
                         <td>'.$row["mtopnumber"].'</td>
                         <td>'.$row["mtopdate"].'</td>
                         

                         
                        
                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }
?>