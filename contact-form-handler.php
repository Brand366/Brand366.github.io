<?php
    $first_name = $_POST['fname'];
    $last_name = $_POST'lname'];
    $phone_number = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = '$visitor_email';

    $email_subject = "New Form Submission";

    $email_body = "User First Name: $first_name.\n".
                    "User Last Name: $last_name.\n".
                        "User Phone Number: $phone_number.\n".
                            "User Email: $visitor_email.\n".
                                "User Message: $message.\n";

    $to = "brandon.vonhoff@yahoo.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n ";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")
?>