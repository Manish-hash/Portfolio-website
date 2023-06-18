
<?php
      
      if(isset($_POST["submt"])){
        include("include/config.php");
        $n=$_POST["name"];
        $e=$_POST["email"];
        $sub=$_POST["subject"];
        $m=$_POST["message"];
 
      $contact="INSERT INTO `contact`(`name`,`email`,`subject`,`message`) values('$n','$e','$sub','$m')";
      // echo $contact;
      $qry=mysqli_query($conn,$contact);
      //header("Location:index.php");
      echo"data saved succesfully";
      }
      ?>