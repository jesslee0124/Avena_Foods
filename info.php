<?php 
if(isset($_POST['submit'])){
    $to = "msabares@avenafoods.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];

    $subject2 = "Form submission to Avena Foods";
    $subject3 = "Copy of your form submission";
    $message = "Customer Name : " . $name . "\n\nCustomer Email: " . $from . "\n\nMessage: " . $subject . "\n\n" . $_POST['message'];
    $message2 = "Hello, " . $name . ". Thank you for contacting Avena Foods. We will contact you shortly." . "\n\nHere is a copy of your message: " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
  }


  if (headers_sent()) {
  	die("Redirect failed.");
  } else {
  	exit(header("Location: oats.html"));
  }

?>