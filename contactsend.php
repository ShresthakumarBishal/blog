<?php
$status="";
$con = mysqli_connect('server319','currided_bishal','q1rCE9)AnLkp','currided_kivyapp');
if (!$con) {
  $status="fail";
}
if ($status==""){
  if(isset($_POST['sendmail'])){
      $name=$_POST["name"];
      $email=$_POST["email"];
      $country=$_POST["country"];
      $subject=$_POST["subject"];
      $insert_sql="INSERT INTO contact (name, email, country, subject) VALUE ('$name', '$email', '$country', '$subject')";
      $result=mysqli_query($con,  $insert_sql);
      if($result) {
        $to = "stha1265@gmail.com";
        
        $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Message has been sent</p>
            <div>".$name."</div>
            <div>".$country."</div>
            <div>".$email."</div>
            <div>".$subject."</div>
            </body>
            </html>
            ";
            
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: bishal@simplikivyapp.com'. "\r\n";        
        $mail=mail($to,$subject,$message,$headers);
        if($mail){
            echo '<script type="text/JavaScript"> 
            alert("Successfully, Message is sent\nThank You");
            location.href="contact-us";
            </script>'
            ;
        }else{
            echo '<script type="text/JavaScript"> 
            alert("UnSuccessfull, Message is not send Try Again");
            location.href="contact-us";
            </script>'
            ;
        }
        
    } else{
        echo '<script type="text/JavaScript"> 
        alert("Soryy, No Connection");
        location.href="contact-us";
        </script>'
        ;
    }
    }
}else{
  echo '<script type="text/JavaScript"> 
  alert("Soryy, Connection is Lost");
  location.href="contact-us";
  </script>'
  ;
}


?>