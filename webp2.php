<?php


if(isset($_POST['sub'])){

	$host="localhost";
$user="root";
$pass="";
$db="webp";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error) {
	die("error".$conn->connect_error);
}

	$name=$_POST['name'];
		$id=$_POST['id'];
			$gen=$_POST['radio'];
				$email=$_POST['email'];
					$contact=$_POST['contact'];
						$dept=$_POST['opt'];



$sql="INSERT INTO data(name,id,gender,email,contact,dept) VALUES('$name','$id','$gen','$email','$contact','$dept');";

if(mysqli_query($conn,$sql)){

echo"successfully saved";

}

else{

	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}






?>