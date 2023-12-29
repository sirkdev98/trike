<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["print"])){

header ('location:cpcpdfall.php?from='.$from.'&to='.$to.'');


}


elseif(isset($_POST["exportmasterdrivers"]))
{

  $output = '';
    $sql ="SELECT
  driveroperator.pid,
  driveroperator.fname,
  driveroperator.mname,
  driveroperator.lname,
   driveroperator.extname,
  driveroperator.licensenum,
  driveroperator.barangay,
  driveroperator.bday,
  driveroperator.type,
  driveroperator.bloodtype,
  driveroperator.licensetype,
  driveroperator.licensenum,
  driveroperator.licensevalid,
  driveroperator.contactnumber,
  driveroperator.address1,
  driveroperator.gender,
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
  drivers.id
FROM driveroperator
JOIN drivers
ON driveroperator.pid = drivers.driverid
JOIN tricycle
ON tricycle.bodynum = drivers.bdynumber";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Driver Fname</th>
                        <th>Driver Mname</th> 
                        <th>Driver Lname</th> 
                        <th>Driver Ext Name</th> 
                         <th>Driver Gender</th> 
                        <th>address line1</th>   
                        <th>barangay</th>  
                        <th>contact #</th>  
                        
                        <th>Bday</th>
                        <th>Blood type</th>
                        <th>Type</th>
                        <th>id number</th>
                        <th>Id type</th>
                        <th>license Validity</th>
                         <th>Trike ID</th>
                         <th>BODY NUMBER</th>

                        
                       


                       
    
                    </tr>
  ';
  while ($row = $query->fetch_assoc())
  {
   $output .= '
    <tr>  
                         <td>'.$row["pid"].'</td>  
                         <td>'.$row["fname"].'</td>  
                         <td>'.$row["mname"].'</td>  
                         <td>'.$row["lname"].'</td> 
                         <td>'.$row["extname"].'</td> 
                          <td>'.$row["gender"].'</td> 
                         <td>'.$row["address1"].'</td> 
                         <td>'.$row["barangay"].'</td> 
                         <td>'.$row["contactnumber"].'</td>
                       
                         <td>'.$row["bday"].'</td> 
                         <td>'.$row["bloodtype"].'</td>
                         <td>'.$row["type"].'</td>
                         <td>'.$row["licensenum"].'</td>  
                         <td>'.$row["licensetype"].'</td>  
                         <td>'.$row["licensevalid"].'</td> 
                         <td>'.$row["id"].'</td> 
                         <td>'.$row["bodynum"].'</td> 

                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }
?>