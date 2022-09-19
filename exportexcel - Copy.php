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
?>