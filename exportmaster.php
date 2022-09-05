<?php  
//export.php  
include 'include/connection.php';
if(isset($_POST["print"])){
$from = $_POST['startDatePicker'];
   $to = $_POST['endDatePicker'];
header ('location:cpcpdfall.php?from='.$from.'&to='.$to.'');


}


elseif(isset($_POST["exportmaster"]))
{

  $output = '';
    $sql ="SELECT * FROM `tricycle`";
                           $query = $conn->query($sql);
                          
      
 
  $output .='
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         
                        <th>Operator Fname</th>
                        <th>Operator Mname</th> 
                        <th>Operator Lname</th> 
                        <th>Operator Ext Name</th> 
                        <th>MVfile</th>   
                        <th>Plate#</th>  
                        <th>Engine#</th>  
                        <th>Chasis#</th>  
                        <th>maker</th>
                        <th>motorcolor</th>
                        <th>piston disp</th>
                        <th>cor</th>
                        <th>OR num</th>
                        <th>parking</th>
                        <th>parking location</th>
                        <th>acquisition date</th>
                        <th>year model</th>
                          <th>application date</th>
                          <th>brgy code</th>
                          <th>bodynum</th>
                          <th>toda</th>
                          <th>sidecar color</th>
                          <th>classification</th>
                          <th>current mtop</th>
                          <th>current franchise</th>


                       
    
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
                         <td>'.$row["extname"].'</td> 
                         <td>'.$row["mvfileno"].'</td> 
                         <td>'.$row["plateno"].'</td> 
                         
                         <td>'.$row["engineno"].'</td>
                         <td>'.$row["chasisno"].'</td>  
                         <td>'.$row["maker"].'</td>  
                         <td>'.$row["motorcolor"].'</td> 
                         <td>'.$row["pistondisp"].'</td> 
                         <td>'.$row["cor"].'</td> 
                         <td>'.$row["ornum"].'</td> 
                         <td>'.$row["parking"].'</td> 
                         <td>'.$row["parkinglocation"].'</td> 
                         <td>'.$row["acquisitiondate"].'</td> 
                         <td>'.$row["yearmodel"].'</td>
                         <td>'.$row["brgycode"].'</td>  
                         <td>'.$row["bodynum"].'</td> 
                         
                         <td>'.$row["toda"].'</td>  
                         <td>'.$row["sidecarcolor"].'</td> 
                         <td>'.$row["classification"].'</td> 
                         <td>'.$row["currentmtop"].'</td> 
                         <td>'.$row["currentfranchise"].'</td> 
                         <td>'.$row["applicationdate"].'</td>
                        
                    </tr>
   ';
}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
  }
?>