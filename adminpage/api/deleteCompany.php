<?php
    include('../../connection/connection.php');
    $response = array();
    $CompanyId = $_POST['CompanyId'];
    $query = "DELETE FROM `crm_company` WHERE `CompanyId` = ('$CompanyId') ";
    
    if(mysqli_query($con, $query)){
        $response['error'] = false;
        $response['message'] = "Company Deleted";
    }
    else{
        $response['error'] = true;
        $response['message'] = "Company Not Deleted";
    }


    echo json_encode($response);
?>