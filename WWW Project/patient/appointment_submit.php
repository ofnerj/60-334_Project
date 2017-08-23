<html>
	
	<head>
	
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<title>Submit Successful</title>
	
	</head>
	
	<body>
		
		<?php
		
			require_once'../login.php';
			$conn= mysql_connect($hn,$un,$pw,$db);
			
			if(!$conn){
				die("Unable To Submit.  Try Going Back And Submitting Again Or Contact Us At 1-800-555-5555 Or WeCareWindsor@gmail.com");
			}
			mysql_select_db("ofnerj_project",$conn);
			//Receives the variables from the form
			$lname=$_POST["lname"];
			$fname=$_POST["fname"];
			$sex=$_POST["gender"];
			$pnumber=$_POST["pnumber"];
			$saddress=$_POST["saddress"];
			$post_code=$_POST["postal_code"];
			$city=$_POST["city"];
			$comment=$_POST["comment"];
			$province=$_POST["province"];
			$dobyear=$_POST["DOBYear"];
			$dobmonth=$_POST["DOBMonth"];
			$dobday=$_POST["DOBDay"];
			
			$dob=$dobmonth." ".$dobday." ".$dobyear;

			$current=date("Y/m/d");		//current date
			
			$address=$saddress." ".$city." ".$province." ".$post_code;	//puts all of the addresses together
			
			//$query="INSERT INTO Patients VALUES('NULL','$fname','$lname','$pnumber','$sex','$current','$dob','$address','$comment')";
			
			if (mysql_query("INSERT INTO Patients VALUES(NULL,$fname,$lname,$pnumber,$sex,$current,$dob,$address,NULL,NULL,$comment)",$conn)){
				echo"Submit Successful";
			}
			else{
				echo "Database access failed.  Try Going Back And Submitting Again Or Contact Us At 1-800-555-5555 Or WeCareWindsor@gmail.com: ".mysql_error();
			}*/
			
			//$result=$conn->query($query);
			
			/*if(!$result){
				die ("Database access failed.  Try Going Back And Submitting Again Or Contact Us At 1-800-555-5555 Or WeCareWindsor@gmail.com: ". $conn->error);
			}
			
			else{
				echo"Submit Successful";
			}*/
			
			//$result->close();
			$conn->close();
		?>
		
		hello world
		
	<body>

<html>