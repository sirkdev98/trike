<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["print"])){
$from = $_POST['startDatePicker'];
   $to = $_POST['endDatePicker'];
header ('location:cpcpdfall.php?from='.$from.'&to='.$to.'');


}


elseif(isset($_POST["exportmasteroperator"]))
{

  $output = '';
    $sql ="SELECT * FROM `driveroperator` WHERE type !='Driver'";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Operator Fname</th>
                        <th>Operator Mname</th> 
                        <th>Operator Lname</th> 
                        <th>Operator Ext Name</th> 
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