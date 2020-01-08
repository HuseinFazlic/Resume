<?php
include 'index.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumeHusein";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (ctype_alpha($firstName) && ctype_alpha($lastName)) {
	if (!filter_var($mailAddress, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
		$conn->close();
}
$sql = "INSERT INTO messaging (FirstName, LastName, Message, MailAddress)
					VALUES ('$firstName', '$lastName', '$message' , '$mailAddress')";
				
$to      = $mailAddress;
$subject = 'Resume website';
$message = 'Hey there. Thank you for contacting me';
$headers = 'From: hfazlic_1@hotmail.com' . "\r\n" .
    'Reply-To: $mailAddress' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
				
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully. Check your e-mail";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else {
	echo "Check your writing";
}
$conn->close();
?>