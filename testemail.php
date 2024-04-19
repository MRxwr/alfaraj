<?php
$to = "nasserhatab@gmail.com";
$subject = 'تأكيد التسجيل في البرنامج التدريبي '.'high tech';
$row["startDate"] = "2020-10-10";
$msg = '
<html><head></head><body style="
    font-size: 15px;
    font-weight: 700;
    text-align: center;
	direction:rtl;
">
<table style="border:0px;width: 100%;">
<tbody><tr>
<td style="
    text-align: center;
">
<img src="https://i.imgur.com/7Ql4IKt.png" style="width:100px;height:100px">
</td>
<td>
<a href="https://www.youtube.com/channel/UCGpm-sFWf9-bwNQ6g8AeDXw">Youtube</a><br>
<a href="https://twitter.com/int_stc">Twitter</a><br>
<a href="https://www.instagram.com/ambition.kw">Instagram</a><br>
<a href="https://www.facebook.com/ambition.q8">Facebook</a>
</td>
</tr>
</tbody></table>
<br>
<br>
<br>
<br>
تم تأكيد تسجيلكم بنجاح في البرنامج التدريبي '.'high tech' .'
<br>
<br>
تبدأ الدورة بتاريخ '.$row["startDate"].'
<br>
<br>
هذا وسوف يتم التواصل معكم قبل موعد البرنامج التدريبي لموافاتكم بطريقة الدخول
<br>
<br>
للإستفسار والتواصل : 0096566355188 او info@alfaraj.co
<br>
<br>
<br>
<br>
<table style="border:0px;width: 100%;">
<tbody><tr>
<td style="
    text-align: center;
">
<img src="https://i.imgur.com/7Ql4IKt.png" style="width:100px;height:100px">
</td>
<td>
<a href="https://www.youtube.com/channel/UCGpm-sFWf9-bwNQ6g8AeDXw">Youtube</a><br>
<a href="https://twitter.com/int_stc">Twitter</a><br>
<a href="https://www.instagram.com/ambition.kw">Instagram</a><br>
<a href="https://www.facebook.com/ambition.q8">Facebook</a>
</td>
</tr>
</tbody></table>
<br>
</body></html>
';
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
  CURLOPT_POSTFIELDS => array('site' => 'Alfaraj.co ','subject' => $subject,'body' => $message,'from_email' => 'info@alfaraj.com','to_email' => $to),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>