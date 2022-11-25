<?php 
session_start();
include 'db.php';

$errors = array();
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM candidate WHERE cemail='$email' UNION 
                        SELECT * FROM employer WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $row = mysqli_fetch_assoc($run_sql);
            $code = rand(999999, 111111);
            if ($row['type']==='emp') {
                $insert_code = "UPDATE employer SET code = $code WHERE email = '$email'";
            }
            if ($row['type']==='can') {
                $insert_code = "UPDATE candidate SET code = $code WHERE cemail = '$email'";
            }
            
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: talhaumar4373@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Job Market</title>
    <!-- stylesheets-->
	  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


</head>

<body>
<?php include 'header.php'; ?>
    
    <!-- Main Content Start -->
    <div class="container" style=" width: 50%; margin-left: auto; margin-top: 50px; border: 1px solid gray; border-radius: 4px;">
        <div style="text-align: center;">
            <h3>Forget Your Password?</h3>
        </div>
        <form accept="" method="post">
             <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
            <label>Enter Your Email <span style="color: red">*</span></label>
            <div class="form-group">
            <input type="Email" class="form-control" name="email" placeholder="Enter your Email.." required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="check-email" value="Continue">
        </div>
        </form>
        <br>
        
    </div>
    <!-- Main Content End -->


 <!-- Footer Start -->
    <?php include 'footer.php'; ?>
</body>
</html>
