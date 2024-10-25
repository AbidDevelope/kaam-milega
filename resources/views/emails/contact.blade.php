<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

  <p>Dear {{$mObj->name}},</p>

  <p>Thank you for your registration for the Digital Utility Manager Course. We are thrilled to have you as part of our learning community.</p>

  <p>Please find the details of your registration below:</p>

   
  <strong>User Information:</strong>

  <ul>
    <li><strong>Full Name:</strong> {{$mObj->name}}</li>
    <li><strong>Email Address:</strong> {{$mObj->email}}</li>
    <li><strong>Phone Number:</strong> {{$mObj->mobile}}</li>
    <li><strong>Gender:</strong> {{$mObj->gender}}</li>
    <li><strong>Comment:</strong> {{$mObj->comment}}</li>
    <li><strong>Date and Time:</strong> {{date('Y-m-d H:i:s')}}</li>
  </ul>
 
  <p>If you have any questions or need further assistance, feel free to contact our support team at <a href="mailto:support@example.com">support@example.com</a>. We look forward to providing you with a rewarding learning experience.</p>

  <p>Best regards,</p>
  <p>Distribution Utility Meet</p>

</body>
</html>
