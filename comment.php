<?php
$status="";
$con = mysqli_connect('server319','currided_bishal','q1rCE9)AnLkp','currided_kivyapp');
if (!$con) {
  $status="fail";
}
if ($status==""){
  if(isset($_POST['entry'])){
      $name=$_POST["name"];
      $comments=$_POST["comments"];
      $insert_sql="INSERT INTO comment (name, comments) VALUE ('$name', '$comments')";
      $result=mysqli_query($con,  $insert_sql);
      if($result) {
          echo '<script type="text/JavaScript"> 
                  alert("Thank You For Comment");
                  location.href="kivy-app#demo";
                  </script>'
                  ;
            } else{
              echo '<script type="text/JavaScript"> 
              alert("Sorry UnSuccessfull, Try Again");
              location.href="kivy-app#demo";
              </script>'
              ;
            }
    }
}else{
  echo '<script type="text/JavaScript"> 
  alert("Soryy, No Connection");
  location.href="kivy-app";
  </script>'
  ;
}


?>