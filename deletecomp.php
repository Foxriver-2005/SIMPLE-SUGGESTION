<?php 

include "connection.php"; 

if (isset($_GET['deleteid'])) {

    $complaints = $_GET['deleteid'];

    $sql = "DELETE  FROM complaints";

     $result = mysqli_query($con,$sql);

     if ($result == TRUE) {
         header('location:viewcomplaints.php');

       // echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>