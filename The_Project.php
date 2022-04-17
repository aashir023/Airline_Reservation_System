<!DOCTYPE html>
<html>
<head>
<title>AIRLINE RESERVATION SYSTEM</title>
<style>
body{
	background-image:url(dlt.jpg);
	background-size:cover;
	background-attachment:fixed;
   }
  
button{
font-size:30px;
padding:10px;
border-radius:10px;
margin:20px;
cursor:pointer;
color: red;
background-color: black;
}	
#container{
	text-align:center;
}
</style>
<div id="main">
<h1 style="color:black;text-align:center;" id="h1">WELCOME TO ONLINE FLIGHT BOOKING SYSTEM</h1>
<h1 style="color:green;text-align:center;" id="h0">BOOK A TICKET</h1>
<h2 style="color:green;text-align:center;" id="h2">SEARCH FLIGHTS</h2>
<h1 style="color:blue;text-align:center;" id="h3">THE FLIGHT AIR PAKISTAN IS AVAILBLE</h1>
<h2 style="color:green;text-align:center;" id="h4">SEE THE STATUS OF SEATS</h2>

<h1 style="color:blue;text-align:center;" id="h5">Congratulations! Your information has been approved successfully<br>Click Buy to book the ticket</h1>
<h1 style="color:green;text-align:center;" id="h7">You have been assigned the id_number </h1>
<h1 style="color:blue;text-align:center;" id="h8">Please Insert the Unique_Id of Your Ticket</h1>

</head>
<body id="frame2">
<br><br><br>
<div id="container">
<button id="bt1" onclick="window0()">Customer</button>
<button id="bt2" onclick="admin()">Admin</button>
</div>
<div id="winz" style="color:blue;text-align:center;" >
<button  onclick="window1()">BOOK_TICKET</button>
<button onclick="cancel()">CANCEL_TICKET</button>
</div>


<div id="back">
<button onclick="backto()">HOME</button>
</div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="color:blue;text-align:center;">
<div id ="book" >
  <label for="fname">FROM:</label><br>
  <select name="FROM" id="from"><br>
  <option value="">  </option>
  <option value="Islamabad">Islamabad</option>
  <option value="Karachi">Karachi</option>
  <option value="Lahore">Lahore</option>
  <option value="Quetta">Quetta</option>
  <option value="Peshawar">Peshawar</option>
  <option value="Faislabad">Faislabad</option>
  
  </select><br>
  <span id="f_msg" style="color:red;">  </span><br><br>
  <label for="lname">TO:</label><br>
  <select name="TO" id="to"><br>
  <option value="">  </option>
  <option value="Islamabad">Islamabad</option>
  <option value="Karachi">Karachi</option>
  <option value="Lahore">Lahore</option>
  <option value="Quetta">Quetta</option>
  <option value="Peshawar">Peshawar</option>
  <option value="Faislabad">Faislabad</option>
  </select><br> 
  <span id="t_msg" style="color:red;">  </span><br><br>

  <label>DEPARTURE:</label><br>
  <input type="date" id="date" name="date"><br>
  <span id="d_msg" style="color:red;">  </span><br><br>  
</div> 
<div id="st" style="color:blue;text-align:center;">

<label for="st">SEATS:</label><br>
<select name="st" id="123"><br>
<option value="">   </option>
<option value="1">1-Buisness</option>
<option value="2">2-Buisness</option>
<option value="3">3-Buisness</option>
<option value="4">4-Buisness</option>
<option value="5">5-Buisness</option>
<option value="6">6-Buisness</option>
<option value="7">7-Buisness</option>
<option value="8">8-Buisness</option>
<option value="9">9-Buisness</option>
<option value="10">10-Buisness</option>
<option value="11">11-Buisness</option>
<option value="12">12-Buisness</option>
<option value="13">13-Buisness</option>
<option value="14">14-Buisness</option>
<option value="15">15-Buisness</option>
<option value="16">16-Economy</option>
<option value="17">17-Economy</option>
<option value="18">18-Economy</option>
<option value="19">19-Economy</option>
<option value="20">20-Economy</option>
<option value="21">21-Economy</option>
<option value="22">22-Economy</option>
<option value="23">23-Economy</option>
<option value="24">24-Economy</option>
<option value="25">25-Economy</option>
<option value="26">26-Economy</option>
<option value="27">27-Economy</option>
<option value="28">28-Economy</option>
<option value="29">29-Economy</option>
<option value="30">30-Economy</option>
<option value="31">31-Economy</option>
<option value="32">32-Economy</option>
<option value="33">33-Economy</option>
<option value="34">34-Economy</option>
<option value="35">35-Economy</option>
<option value="36">36-Economy</option>
<option value="37">37-Economy</option>
<option value="38">38-Economy</option>
<option value="39">39-Economy</option>
<option value="40">40-Economy</option>
</select>
<br>
<span id="p_msg" style="color:red;">  </span><br><br>
</div>
<div id="info" style="color:blue;text-align:center;">

  <label for="fname" >Full_Name:</label><br>
  <input type="text" name="name" id="name" size="20"><br>
  <span id="n_msg" style="color:red;">  </span><br><br>
  <label for="phone" >Phone Number:</label><br>
  <input type="number" id="number" name="number" size="20"><br>
  <span id="num_msg" style="color:red;">  </span><br><br>
  <label for="email" >Email:</label><br>
  <input type="email" id="email" size="20" name="email"><br>
  <span id="e_msg" style="color:red;">  </span><br><br> 

  <label for="age">AGE:</label><br>
  <input type="text" id="age" size="8" name="age" placeholder="18 or above"><br>
  <span id="age_msg" style="color:red;">  </span><br><br>

</div>
<div>
<input type="text" name="u_id" id="u_id" size="20"><br>
</div>
<div id="plz" style="color:blue;text-align:center;">
<button>BUY</button>
</div>
</form>

<div id="f3" align="center";><br><br>
<button onclick="window2()">Search</button>
</div>

<div  align="center">

<p  id="price" style="color:black;text-align:center;">The Economy class seat cost PKR=12000</p>
<p  id="price2" style="color:black;text-align:center;">The Buisness class seat cost PKR=18000 </p><br><br>

</div>
<div id="check" align="center">
<button  onclick="window3()">CHECK_PRICE</butoon>
<button  onclick="windowz()">DONE</button>
</div>

<div id="cnfrm" align="center">
<button onclick="window4()" id="confirm">Confirm</button>
</div>
 </div>
 
<head>

<h1 style="color:blue;text-align:center;" id="h6">Please login to check the status of flight</h1>
</head>

 <form action="RECORD.php" method="post" ">
 <div id="add" style="color:green;text-align:center;">
 <br><br><br><br>   
                UserName<br>
 <input type="text" name="u_name" id="u_name" size="15"><br><br>
 <span id="u_msg" style="color:red;">  </span><br><br><br>
                Password<br>
 <input type="password" name="pass" id="pass" size="15"><br><br>
 <span id="pass_msg" style="color:red;">  </span><br><br>
 
  </div>  
  
 <div id="sb" style="color:green;text-align:center;">
 <button>CHECK</button>
 </div>
 </form>
 <div id="lg" style="color:green;text-align:center;">
<br>
<button onclick="log()" >LOGIN</button>
 </div>
 
 
 <form action="Delete.php" method="post" ">
 <div id="dlt" style="color:blue;text-align:center;">
 <br>
                Unique_Id<br>
 <input type="text" name="u_id" id="u_i" size="15"><br><br>
 <span id="uid_msg" style="color:red;">  </span><br>

 <div id="req">
 <button>FIND ID</button> 
 </div>
 </form>
 </div>  
 <div id="dltb" onclick="uc()" style="color:green;text-align:center;">
 <button>CHECK ID</button> 
 </div>
 
 
<script>
var ids=Math.floor(Math.random() * 10000);
document.getElementById("winz").style.display='none';
document.getElementById("sb").style.display='none';
document.getElementById("lg").style.display='none';
document.getElementById("h8").style.display='none';
document.getElementById("h0").style.display='none';
document.getElementById("h6").style.display='none';
document.getElementById("h7").style.display='none';
document.getElementById("add").style.display='none';
document.getElementById("dlt").style.display='none';
document.getElementById("dltb").style.display='none';
document.getElementById("h5").style.display='none';
document.getElementById("info").style.display='none';
document.getElementById("cnfrm").style.display='none';
document.getElementById("back").style.display='none';	
document.getElementById("h2").style.display='none';	
document.getElementById("book").style.display='none';
document.getElementById("f3").style.display='none';	
document.getElementById("h3").style.display='none';	
document.getElementById("h4").style.display='none';	
document.getElementById("st").style.display='none';
document.getElementById("price").style.display='none';
document.getElementById("price2").style.display='none';
document.getElementById("u_id").style.display='none';
document.getElementById("plz").style.display='none';
document.getElementById("123").value="";
document.getElementById("check").style.display='none';


function blink_s()
{			
        var ch=document.getElementById("h1").innerHTML;      

	    if(ch=='CHOOSE ONE')
		{
			document.getElementById("h1").innerHTML="WELCOME TO ONLINE FLIGHT BOOKING SYSTEM";			
		}
		else
		{
			document.getElementById("h1").innerHTML="CHOOSE ONE";
		}
}

setInterval(blink_s,1500);

function  admin()
{
	
	document.getElementById("main").style.display='none';
	document.getElementById("h6").style.display='block';
	document.getElementById("add").style.display='block';
    document.getElementById("lg").style.display='block';


}
function log()
{
	var n=document.getElementById("u_name").value;
	var p=document.getElementById("pass").value;
	var k=0;
	if(n=='')
	{
		document.getElementById("u_msg").innerHTML="Please enter a Username";
		
	}
    	
	 if(p=='')
	{
		document.getElementById("pass_msg").innerHTML="Please enter the Password";
		
	}

	if(n=='admin')
	{
		document.getElementById("u_msg").innerHTML="";				
	    k++;
	}
	else if(n!='')
	{
		document.getElementById("u_msg").innerHTML="Incorrect Username";		
	}
	
	
     if(p=='12345')
	{
      document.getElementById("pass_msg").innerHTML="";
       k++;
	} 		
  
    	else if(p!='')
	{
		document.getElementById("pass_msg").innerHTML="Incorrect Password";		
	} 

	
 if(k==2)
 {
   setTimeout(success,2000);  
	  
 }

  function success()
	 {
	  document.getElementById("h6").innerHTML="Congratulations! Successfully Logged in <br><br><br> Click CHECK to see the status of Flights";
	  document.getElementById("add").style.display='none';
      document.getElementById("lg").style.display='none'; 
	  document.getElementById("sb").style.display='block';
	 }
	 

}

function window0()
{ 

document.getElementById("winz").style.display='block';
document.getElementById("h0").style.display='block';
document.getElementById("back").style.display='block';
document.getElementById("container").style.display='none';
document.getElementById("h1").style.display='none';


function blink_s()
{			
        var ch1=document.getElementById("h0").innerHTML;      

	    if(ch1=='BOOK A TICKET')
		{
			document.getElementById("h0").innerHTML="CANCEL A TICKET";			
		}
		else
		{
			document.getElementById("h0").innerHTML="BOOK A TICKET";
		}
}

setInterval(blink_s,1500);

}

function window1()
{
 function forca()
 { 
 document.getElementById("p_msg").innerHTML="";
 document.getElementById("123").value="";  
	
document.getElementById("price").style.display='none';	
document.getElementById("price2").style.display='none';	
document.getElementById("h3").style.display='none';	
document.getElementById("h4").style.display='none';		

document.getElementById("h0").style.display='none';	
document.getElementById("winz").style.display='none';
document.getElementById("h2").style.display='block';
document.getElementById("back").style.display='block';	
document.getElementById("container").style.display='none';
document.getElementById("h1").style.display='none';
document.getElementById("book").style.display='block';
document.getElementById("f3").style.display='block';	
document.getElementById("st").style.display='none';
document.getElementById("plz").style.display='none';
document.getElementById("from").value="";
document.getElementById("to").value="";   
document.getElementById("date").value="";
document.getElementById("name").value="";
document.getElementById("number").value="";   
document.getElementById("email").value="";
document.getElementById("age").value="";
 }
setTimeout(forca,1000);


function blink2()
{	   		
        var ch2=document.getElementById("h2").innerHTML;      
  
	    if(ch2=='FILL THE FOLLOWING')
		{
			document.getElementById("h2").innerHTML="SEARCH FLIGHTS";			
		}
		else
		{
			document.getElementById("h2").innerHTML="FILL THE FOLLOWING";
		}
}

setInterval(blink2,1500);
}

function backto()
{
	function back()
	{
	document.getElementById("dltb").style.display='none';
	document.getElementById("h5").style.display='none';	
    document.getElementById("plz").style.display='none';
	document.getElementById("check").style.display='none';
	document.getElementById("n_msg").style.display='none';
	document.getElementById("dlt").style.display='none';
	document.getElementById("num_msg").style.display='none';
	document.getElementById("e_msg").style.display='none';
	document.getElementById("age_msg").style.display='none';
	document.getElementById("123").value="";
	document.getElementById("info").style.display='none';
	document.getElementById("cnfrm").style.display='none';
	document.getElementById("price").style.display='none';
	document.getElementById("price").style.display='none';
    document.getElementById("price2").style.display='none';
	document.getElementById("st").style.display='none';
    document.getElementById("h0").style.display='none';	
    document.getElementById("winz").style.display='none';  	
	document.getElementById("h3").style.display='none';	
    document.getElementById("h4").style.display='none';
    document.getElementById("h8").style.display='none';	
	document.getElementById("container").style.display='block';
    document.getElementById("h1").style.display='block';
    document.getElementById("back").style.display='none';		
    document.getElementById("h2").style.display='none';	
    document.getElementById("book").style.display='none';
    document.getElementById("f3").style.display='none';
    document.getElementById("f_msg").style.display='none';
	document.getElementById("t_msg").style.display='none';
	document.getElementById("d_msg").style.display='none';
	document.getElementById("c_msg").style.display='none';
    
	
    }
	
	setTimeout(back,1000);

}


function cancel()
{
var u=document.getElementById("u_id").value;	
document.getElementById("h0").style.display='none';	
document.getElementById("winz").style.display='none';
document.getElementById("back").style.display='back';	
document.getElementById("h8").style.display='block';
document.getElementById("dlt").style.display='block';	
document.getElementById("req").style.display='none';
document.getElementById("dltb").style.display='block';
}

function uc()
{
var u=document.getElementById("u_i").value;
var k=0;
if (u=='')
{
document.getElementById("uid_msg").innerHTML="please insert the id";
}
else
{
document.getElementById("uid_msg").innerHTML="";	
k=1;
}
		if(k==1)
		{
		document.getElementById("req").style.display='block';	
		document.getElementById("dltb").style.display='none';	
		}
}



function window2()
{
	
	var from = document.getElementById("from").value;
	var to = document.getElementById("to").value;
	var date = document.getElementById("date").value;
	var i=0;
	if(from=='')
	{
    		document.getElementById("f_msg").style.display='block'; 		
            document.getElementById("f_msg").innerHTML="can't be left empty";
	}
	else
	{
		document.getElementById("f_msg").style.display='none';
	    i++;
	}
	
    if(to=='')
	{
    		document.getElementById("t_msg").style.display='block'; 	
			document.getElementById("t_msg").innerHTML="can't be left empty";
	}
	else if(to==from && to!='')
	{
		    document.getElementById("t_msg").style.display='block';
		    document.getElementById("t_msg").innerHTML="Arrival and destination can't be same";	            
	}
	else
	{
		document.getElementById("t_msg").style.display='none';
		i++;
	}
	
	if(date=='')
	{
    		document.getElementById("d_msg").style.display='block'; 		
            document.getElementById("d_msg").innerHTML="can't be left empty";	       
	}
	else
	{
		document.getElementById("d_msg").style.display='none';
	    i++;
	}
	
if(i==3)
{
	function go()
	{
	document.getElementById("check").style.display='block';
	document.getElementById("book").style.display='none';
	document.getElementById("f3").style.display='none';
	document.getElementById("h2").style.display='none';		
	document.getElementById("h3").style.display='block';	
	document.getElementById("h4").style.display='block';
	document.getElementById("st").style.display='block';
    
}
setTimeout(go,1000);
}
}
var d=0; 
function window3()
{
    	
	var st=document.getElementById("123").value;
      
	document.getElementById("price").style.display='none';
	document.getElementById("price2").style.display='none';
	if(st=='')
	{
		document.getElementById("p_msg").innerHTML="Please choose a seat";
	
	}
	else if(st>15)
	{	
	document.getElementById("price").style.display='block';
	document.getElementById("p_msg").innerHTML="";
	     d=1;
	}
	else
	{
	document.getElementById("price2").style.display='block';	
	document.getElementById("p_msg").innerHTML="";
	d=1;
	}
}	
function windowz()
{	
  var st=document.getElementById("123").value;
  if(st=='')
	{
		document.getElementById("p_msg").innerHTML="Please choose a seat";
		document.getElementById("price").style.display='none';
		document.getElementById("price2").style.display='none';
	}
   else if(d==0)
   {
	   document.getElementById("p_msg").innerHTML="Please Check Price first";	   
   }
    else   
	{
	  document.getElementById("p_msg").innerHTML="";		
	  document.getElementById("check").style.display='none';
	  document.getElementById("st").style.display='none';
	  document.getElementById("price").style.display='none';
	  document.getElementById("price2").style.display='none';
	  document.getElementById("h3").style.display='none';	
      document.getElementById("h4").style.display='none';	
	  document.getElementById("h4").style.display='none';
	  document.getElementById("h4").style.display='none';
      document.getElementById("cnfrm").style.display='block';	 
	  document.getElementById("info").style.display='block';			
	  
	}	
  }
  
function window4()
{
	var name=document.getElementById("name").value;
    var num=document.getElementById("number").value;
	var email=document.getElementById("email").value;
	var age=document.getElementById("age").value;
     
	
	var c=0;	
	if(name=='')
	{
		document.getElementById("n_msg").style.display='block';
		document.getElementById("n_msg").innerHTML="can't be left empty";
		
	}
  else 
    {
       		document.getElementById("n_msg").innerHTML="";   
            c++; 
    }	  
	if(num=='')
	{
        document.getElementById("num_msg").style.display='block';
		document.getElementById("num_msg").innerHTML="can't be left empty";
		
	}
  else 
    {
		     
       		document.getElementById("num_msg").innerHTML="";   
         c++;
    }
	if(email=='')
	{
		document.getElementById("e_msg").style.display='block';
		document.getElementById("e_msg").innerHTML="can't be left empty";
		
	}
  else 
    {
       		document.getElementById("e_msg").innerHTML="";   
           c++;
    }
	
	if(age=='')
	{
		document.getElementById("age_msg").style.display='block';
		document.getElementById("age_msg").innerHTML="can't be left empty";
		
	}
  else if(age<18)
    {
       		document.getElementById("age_msg").innerHTML="Uunder age";   
           
    }
  else
    {
	      document.getElementById("age_msg").innerHTML="";   
	       c++;
    }



  if(c==4)
  {
	  
	  var h=document.getElementById("h7").innerHTML;
	  var id=h.concat(ids);
	  document.getElementById("u_id").value=ids;
	  document.getElementById("h7").innerHTML=id;	  
      document.getElementById("h7").style.display='block';
	  document.getElementById("plz").style.display='block';
      document.getElementById("cnfrm").style.display='none';
      document.getElementById("info").style.display='none';	  
	  document.getElementById("h7").style.display='block'; 
	  document.getElementById("h5").style.display='block';
      
  }
  }

</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $from = $_POST['FROM'];
  $to = $_POST['TO'];
  $date = $_POST['date'];
  $seat = $_POST['st'];
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $id= $_POST['u_id'];
  $conn=mysqli_connect("localhost","root","","flight") or die("Connection Failed");
  $sql="INSERT INTO information(Arrival,Destination,Date,Seat_Info,Name,Phone,Email,Age,Unique_Id) VALUES ('$from','$to','$date','$seat','$name','$number','$email','$age',$id)";
  mysqli_query($conn,$sql);
}
?>

</body>
</html>
