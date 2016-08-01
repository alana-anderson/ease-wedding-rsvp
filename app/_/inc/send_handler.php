<?php
  if (isset($_POST['status'])) {
    $subject = 'Emily & Steven Wedding RSVP';
    $to  = 'brides@gmail.com' . ', ';
    $to .= 'groom@gmail.com';
    $body = '';
    $headers = 'From: sitename.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $guest = $_POST['guest-value'];
    $status = $_POST['status'];
    $plusOne = $_POST['plus-one'];
    $meal = $_POST['meal'];
    $notes = $_POST['additional'];

    // Setup email body
    $body .= 'A user has responded to your invitation!\n';
    $body .= 'Guest Name: ' . $guest;
    $body .= 'Status: ' . $status;

    // Check confirmed guest
    if ($status == 'Confirmed attendance') {
      $body .= 'Additional Guest(s): ' . $plusOne;
      $body .= 'Meal selection: ' . $meal;
    }
    if ($notes) {
      $body .= 'Additional Note(s): ' . $notes;
    }

    mail($to,$subject,$body,$headers);
    echo header('Location: thanks.php');
  }

?>
