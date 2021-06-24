<?php
$DB="donation";
$USER="root";
$PASS="";
$HOST="localhost";

 $con=mysqli_connect($HOST,$USER,$PASS,$DB);
 if(!$con){
	 echo "Not Connected !...";
	 
 }
 if(isset($_POST['submit'])){
	 
	 
	 if( empty($_POST['q']) || empty($_POST['w']))
	 {
		echo "Empty Section Here"; 
		 
	 }
	 else{
		 
		 
		 
		 $sql="select * from user_details where Userid='".$_POST['q']."' and Password='".$_POST['w']."'";
		 $result=mysqli_query($con,$sql);
		 if(mysqli_fetch_assoc($result)){
			 
			 $_SESSION['User']=$_POST['q'];

			 $username=$_POST['q'];
			 $url="?username=".$username;
			 header('Location: http://localhost/donation/home.php' .$url);
			 exit();
		 }
		 else{
			 echo "Userid and Password Invalid";
			 
		 }
		 
	 }
	 }
	 
	 else{
		 echo "Not Success";
		 
		 
		 
	 }
	 

 
?>