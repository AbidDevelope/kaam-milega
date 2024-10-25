<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

  <p>Dear {{$user_data->name}},</p>

  <p>Thank you for your registration for the Digital Utility Manager Course. We are thrilled to have you as part of our learning community.</p>

  <p>Please find the details of your registration below:</p>

   
  <strong>User Information:</strong>

  <ul>
    <li><strong>Full Name:</strong> {{$user_data->name}}</li>
    <li><strong>Organisation:</strong> {{$user_data->organization}}</li>
    <li><strong>Level of Officer:</strong> {{$user_data->level_officer}}</li>
    <li><strong>Gender:</strong> {{$user_data->gender}}</li>
    <li><strong>Email Address:</strong> {{$user_data->email}}</li>
    <li><strong>Phone Number:</strong> {{$user_data->phone}}</li>
    <li><strong>Date and Time:</strong> {{date('Y-m-d H:i:s')}}</li>
  </ul>

  <strong>Login Information:</strong>
  <ul>
    <li><strong>User Name:</strong> {{$user_data->email}}</li>
    <li><strong>Password:</strong> {{$user_data->show_password}}</li>
  </ul>
   
  <p>If you have any questions or need further assistance, feel free to contact our support team at <a href="mailto:support@example.com">support@example.com</a>. We look forward to providing you with a rewarding learning experience.</p>

  <p>Best regards,</p>
  <p>Distribution Utility Meet</p>

</body>
</html>
