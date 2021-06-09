<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $number = $_POST['number'];

       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error#contact');
       }
       else
       {
           $to = "info@power-tel.com";
           $body ="User Name:  $UserName.\n".
                    "Email Address: $Email.\n".
                    "Number : $number.\n".

                    "Message: $Msg.\n";


           if(mail($to,$Subject,$body,$Email))
           {
               header("location:index.php?success#contact");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>
