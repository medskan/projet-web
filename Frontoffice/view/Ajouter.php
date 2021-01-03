<?PHP
$con = mysqli_connect('localhost','root','') ;
mysqli_select_db($con,'tfs') ;
       $name =$_POST['name'];
		$destination =$_POST['destination'];
		$checkin =$_POST['checkin'];
		$checkout=$_POST['checkout'];
		$adults=$_POST['adults'] ;
		$children=$_POST['children'];
		$email=$_POST['email'];
		$reg="insert into vol (name,destination,checkin,checkout,adults,children,email) values('$name','$destination','$checkin','$checkout','$adults','$children','$email')";
		mysqli_query($con,$reg) ;
echo '<body onLoad="alert(\'Merci\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';

         
	



?>