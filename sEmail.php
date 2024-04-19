<?php
$to = "info@alfaraj.co";
$subject = "New Booking: " . $orderId;
$msg = '<html><body>You have new booking: '. $orderId .'</body></html>';
$message = html_entity_decode($msg);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'myid.createkwservers.com/api/v1/send/notify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('site' => 'Alfaraj.co ','subject' => $subject,'body' => $message,'from_email' => 'info@alfaraj.co','to_email' => $to),
));

$response = curl_exec($curl);

curl_close($curl);

//mail($to, $subject, $msg, $headers);
?>