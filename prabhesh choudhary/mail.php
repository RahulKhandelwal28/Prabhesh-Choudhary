<?php
if(isset($_POST["sendmail"])){

  $to = "khandelwalrahul743@gmail.com";
  $subject = "Mail From Website";
  $name = $_POST['name'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $headers = "from: $email";
  $msg = $_POST["message"];

// send email
if(mail($to,$subject,$name,$number,$address,$email,$headers,$msg))
{
  echo "done";
}
else{
echo "error";
}
}
?>