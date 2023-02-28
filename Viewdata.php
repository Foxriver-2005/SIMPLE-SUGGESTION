<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php
include('connection.php');
$sql="SELECT *FROM Remarks";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
         echo "Remark:".$row["Remarks"].  "<br>";
         
     }
}
    
    else{
        print("**There are no Remarks**");
       
    }
    mysqli_close($con)
   
?>
 <a href="deletemrks.php?deleteid= '.$remarks.'" class="text-light">Delete</a>

</body>

</html>