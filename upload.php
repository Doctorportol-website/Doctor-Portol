
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$msg = "";


if(isset($_POST['submit']))
{

	
	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		
		$extension=end(explode(".", $file_name));
		$newfilename="$_POST[fname]".".".$extension;
		
		
		$extensions= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$extensions)=== false){
		   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		
		if($file_size > 2097152){
		   $errors[]='File size must be excately 2 MB';
		}
		
		if(empty($errors)==true){
		   move_uploaded_file($file_tmp,"images/".$newfilename);




		}else{
		   print_r($errors);
		}

		session_start();
			$_SESSION['name']= $_POST['fname'];
			$_SESSION ['credentails'] = $_POST['credentials'];
			$_SESSION ['speciality'] = $_POST['speciality'];
			$_SESSION ['address'] = $_POST['address'];
			$_SESSION ['state'] = $_POST['state'];
			$_SESSION ['city'] = $_POST['city'];
			$_SESSION ['pincode'] = $_POST['pincode'];
			$_SESSION ['mobile'] = $_POST['mobile'];
			$_SESSION ['email']  = $_POST['email'];
			$_SESSION ['imgpath'] = $newfilename;

	}
	

		//echo 'Thank you for your feedback. We\'ll appreciate!';
	
		$name = $_POST['fname'];
		$credentails = $_POST['credentials'];
		$speciality = $_POST['speciality'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$mobile = $_POST['mobile'];
		$email  = $_POST['email'];

		

		
	//	$conn = mysqli_connect("localhost", "root","", "doctors");
	//$query ="insert into doctors(DoctorName,Credentials,Speciality,Address,State,City,Pincode,Mobile,Email)values('$name','$credentails','$speciality','$address','$state','$city','$pincode','$mobile','$email')";
	//$result = mysqli_query($conn, $query);
	
	//if($result)
	//{
	
	//}else{
	//die("Something terrible happened. Please try again. ");
	//}
}

 
?>
<html>
	<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
<body>
	<form action="testing.php" method="post">
        <div class="jumbotron text-center">
            <h1>Company Name</h1>
            <p>Welcome Doctor!</p>
			<p>Download your Poster</p> 
            
            <button class="btn btn-success" name="submit">Preview</button>
        </div>

</form>
       
    
    </body>
</html>