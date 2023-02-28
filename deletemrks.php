<?php 

include "connection.php"; 

if (isset($_GET['deleteid'])) {

    $remarks = $_GET['deleteid'];

    $sql = "DELETE  FROM remarks";

     $result = mysqli_query($con,$sql);

     if ($result == TRUE) {
         header('location:viewdata.php');

       // echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>