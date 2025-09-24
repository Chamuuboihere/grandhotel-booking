<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room = $_POST['roomType'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $requests = $_POST['requests'];

    $to = "your-email@example.com"; // Replace with your actual email
    $subject = "New Booking from $name";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nRoom: $room\nCheck-in: $checkin\nCheck-out: $checkout\nRequests: $requests";
    $headers = "From: booking@grandhotel.com";

    mail($to, $subject, $message, $headers);

    // Show success message directly
    echo "
    <div style='text-align:center; margin-top:50px;'>
      <h4 style='color:green;'>🎉 Booking Successful!</h4>
      <p>Thank you for choosing Grand Hotel. We’ve received your booking and will contact you shortly.</p>
      <a href='index.html' style='display:inline-block; margin-top:20px;' class='btn btn-outline-primary'>Back to Home</a>
    </div>
    ";
}
?>