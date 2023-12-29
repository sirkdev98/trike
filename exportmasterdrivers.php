<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["print"])){

header ('location:cpcpdfall.php?from='.$from.'&to='.$to.'');


}


elseif(isset($_POST["exportmasterdrivers"]))
{

  $output = '';
    $sql ="SELECT * FROM `driveroperator` WHERE type ='Driver' OR type = 'Operator/Driver'";
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
                        <th>sfname</th>  
                        <th>smname</th>
                        <th>slname</th>
                        <th>Bday</th>
                        <th>Blood type</th>
                        <th>Type</th>
                        <th>id number</th>
                        <th>Id type</th>
                        <th>license Validity</th>
                        <th>Cedulanum</th>
                       


                       
    
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
                         <td>'.$row["sfname"].'</td>  
                         <td>'.$row["smname"].'</td>  
                         <td>'.$row["slaname"].'</td> 
                         <td>'.$row["bday"].'</td> 
                         <td>'.$row["bloodtype"].'</td>
                         <td>'.$row["type"].'</td>
                         <td>'.$row["licensenum"].'</td>  
                         <td>'.$row["licensetype"].'</td>  
                         <td>'.$row["licensevalid"].'</td> 
                         <td>'.$row["cedulanumber"].'</td> 
                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }
?>