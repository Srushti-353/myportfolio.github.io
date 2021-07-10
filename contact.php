<?php 
session_start();

if(isset($_POST["register"]))
{
    // sendmail();
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['project']) && !empty($_POST['message']))
	{
		$name = $_POST['name'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message  = $_POST['message'];
        sendmail();

	// 	// $query="insert into gymcontact(name,email,mobileno,message) values('$name' , '$email' , '$mobileno' , '$message')";

	// 	// $run = mysqli_query($conn,$query) or die("failed to connect".mysqli_connect_error());
        
	}
    else
    {
		echo"all fields required";
	}
}


function sendmail(){
	$op =  '
	<h2 style="" align="center">Mail has sent succesfully</h2>';
	$myEmail="srushtigadekar321@gmail.com";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$project=$_POST['project'];
	$message=$_POST['message'];

	require 'phpMailerAutoload.php';
	require 'class/class.phpmailer.php';
			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = '587';
			$mail->SMTPAuth = true;
			$mail->Username = 'biotic2312@gmail.com';
			$mail->Password = 'srushti3503';
			$mail->SMTPSecure = 'tls';
			$mail->From = 'Biotic';
			$mail->FromName = 'Biotic';
			$mail->AddAddress($myEmail);
			$mail->WordWrap = 50;
			$mail->IsHTML(true);
			$mail->Subject = 'New form submitted';

			$message_body = '
			<p>New Form submitted,
               User name :'.$name.'<br>
               User Email:'.$email.'<br>
               project:'.$project.'<br>
               Message:'.$message.'</p>
			';
			$mail->Body = $message_body;
			if(!$mail->send()){
				echo"msg could not be send";
				echo"mailer error:".$mail->ErrorInfo;
			}
			else{
				header("location:index.php");
			}
}

?>