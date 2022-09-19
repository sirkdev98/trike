<?php

include 'include/connection.php';

if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);

    $query = "select count(*) as cntUser from tricycle where bodynum='".$username."'";
    
    $result = mysqli_query($conn,$query);
    $response = "<span style='color: green;'>Available.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];
        
        if($count > 0){
            $response = "<span style='color: red;'>*Body number already taken</span>
            <input class='form-control' type='text'  maxlength='4'  min='0' max='9999' step='1' placeholder='UNAVAILABLE' pattern='[0-9]{4}'' style='color:#888; border:0;outline:0;' required
            oninvalid='this.setCustomValidity('THE BODY NUMBER IS ALREADY TAKEN')' hidden/>";
        }
       
    }
    
    echo $response;
    die;
}
