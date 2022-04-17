<html>
<body >
<style>
body{
	background-image:url(admin2.jpg);
	background-size:cover;
	background-attachment:fixed;
   }
</style>
<div id="tb">
<table  border="2" align="center">
   <tr>
      <th>Arrival</th>
      <th>Destination</th>
      <th>Date</th>
      <th>Seat_Info </th>
      <th>Name </th>
	  <th>Phone</th>
	  <th>Email</th>
	  <th>Age</th>
	  <th>Unique_Id</th>
	</tr>
</div>







<?php 
$conn=mysqli_connect("localhost","root","","flight") or die("Connection Failed");
$sql="SELECT * FROM information ";
$result=mysqli_query($conn,$sql);
 
    while ($row = mysqli_fetch_assoc($result))
    {
        print "<tr> <td>";
        echo $row['Arrival']; 
        print "</td> <td>";
        echo $row['Destination']; 
        print "</td> <td>";
        echo $row['Date']; 
        print "</td> <td>";
        echo $row['Seat_Info']; 
        print "</td> <td>";
	    echo $row['Name']; 
        print "</td> <td>";
        echo $row['Phone']; 
        print "</td> <td>";
		echo $row['Email']; 
        print "</td> <td>";
		echo $row['Age']; 
        print "</td> <td>";
		echo $row['Unique_Id']; 
		print "</td> </tr>";      
	}
	
	
	
?>







</body>
</html>