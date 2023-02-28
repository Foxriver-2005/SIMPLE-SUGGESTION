<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
include('connection.php');
$sql="SELECT *FROM Complaints";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
         echo "Complaint:".$row["complaints"]. "<br>";
     }
}
    
    else{
      
        print("**There are no complaints**");
    }
    mysqli_close($con)
?>
<a href="deletecomplaints.php?deleteid= '.$complaints.'" class="text-light">Delete</a>
</body>

</html>