<html>
<body>
<style>
body{
	background-image:url(background.jpg);
	background-size:cover;
	background-attachment:fixed;
   }
</style>


<h1 ></h1>
<?php 
$conn=mysqli_connect("localhost","root","","flight") or die("Connection Failed");
$sql="SELECT * FROM information ";
$result=mysqli_query($conn,$sql);
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $id = $_POST['u_id'];
     $e=0;
	 while ($row = mysqli_fetch_assoc($result))
	 {
          		 
	   	       if($id== $row['Unique_Id'])
			   {
				 $name=$row['Name'];  
				   print "<h1 style=color:blue;text-align:center;><br>";
				   echo "Your ticket with the Name ".$name." has been successfully Cancelled";
			       print "<h1>";
				   $e=1; 
                  
				  $dlt="DELETE FROM information WHERE Unique_Id=$id";
    	          mysqli_query($conn,$dlt); 			  
          				   
			   }
			  
	 }
	 if($e==0)
			   {
				   print "<h1 style=color:blue;text-align:center;><br><br><br><br><br><br><br>";
				   echo "THERE IS NO RECORD FOUND WITH GIVEN ID";
			       print "<h1>";
			   }		 
	 	 
}


?>

</body>
</html>