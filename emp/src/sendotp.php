<?php
include '../../db.php';
$email=$_POST['empemail'];
$code = rand(999999, 111111);

                $insert_code = "UPDATE employer SET code = $code WHERE email = '$email'";
            
            
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Post add OTP";
                $message = "Your post add otp code is $code";
                $sender = "From: talhaumar4373@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                   echo "OTP has been Sent at- $email";
                    
                    exit();
                }else{
                    echo "Failed while sending code!";
                }
            }else{
                echo "Something went wrong!";
            }
 ?>