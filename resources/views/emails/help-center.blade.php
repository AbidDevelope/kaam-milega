<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p>Dear {{$mObj->first_name.' '.$mObj->last_name}},</p>

    <p>Thank you for your enrollment in the Digital Utility Manager Course. We are thrilled to have you as part of our learning community.</p>

    
    <p>Please find the details of your registration below:</p>

    <hr>

    <strong>User Information:</strong>
    <ul>
    <li><strong>Full Name:</strong> {{$mObj->first_name.' '.$mObj->last_name}}</li>
    <li><strong>Company Name:</strong>{{$mObj->company}}  </li>
    <li><strong>Email Address:</strong> {{$mObj->email}}</li>
    <li><strong>Phone Number:</strong> {{$mObj->phone}}</li>
    <li><strong>Comment:</strong>{{$mObj->comment}}  </li>
    <li><strong>Date and Time:</strong> {{date('Y-m-d H:i:s')}}</li>
  </ul>

    <hr>

    <p>If you have any questions or need further assistance, feel free to contact our support team at <a href="mailto:[Support Email Address]">[Support Email Address]</a>. We look forward to providing you with a rewarding learning experience.</p>

    <p>The email can be ignored in case you didn’t request a password reset, as the link is only available for a short time.</p>

    <p>Best regards,</p>
    <p>Digital Utility Manager Course Secretariat</p>
    <p>Revamped Distribution Sector Scheme (RDSS)</p>
</body>
</html>
