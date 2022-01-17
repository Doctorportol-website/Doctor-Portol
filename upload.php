
 <?php
 if(isset($_POST['submit']))
 {
	 
		 echo 'Thank you for your feedback. We\'ll appreciate!';
		 $name = $_POST['fname'];
		 $credentials = $_POST['credentials'];
		 $speciality = $_POST['speciality'];
		 $address = $_POST['address'];
		 $city = $_POST['city'];
		 $pincode = $_POST['pincode'];
		 $mobile = $_POST['mobile'];
		 $email  = $_POST['email'];

		 $conn = mysqli_connect("localhost", "root","", "doctors");
		 $query ="insert into doctors(DoctorName, Credentials, Specialtiy, Address, City, Pincode, Mobile, Email)values('$name', '$credentials', '$speciality', '$address', '$city', '$pincode','$mobile','$email')";
		 $result = mysqli_query($conn, $query);
		 if($result)
					echo 'Thank you for your feedback. We\'ll appreciate!';
		else
					die("Something terrible happened. Please try again. ");
		}
 
			//}	
			

			//	$conn = mysqli_connect("localhost", "root","", "feedbacks");
			//	$query ="insert into feedback(fbname, feedback)values('$name', '$feedback_txt')";
			//	$result = mysqli_query($conn, $query);
			//	if($result)
			//		echo 'Thank you for your feedback. We\'ll appreciate!';
			//	else
			//	die("Something terrible happened. Please try again. ");
			
			?>