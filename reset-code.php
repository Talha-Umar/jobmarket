<?php 
session_start();
include 'db.php';
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = $_POST['newotp'];
        $check_code = "SELECT * FROM candidate WHERE code = '$otp_code' UNION
         SELECT * FROM employer WHERE code = '$otp_code'";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Code Verification</title>
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
            <h3>Code Verification</h3>
        </div>
        <form accept="" method="post">
            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
    
            <div class="form-group">
            <input type="number" class="form-control" name="newotp" placeholder="Enter Code" required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="check-reset-otp" value="Submit">
        </div>
        </form>
        <br>
        
    </div>
    <!-- Main Content End -->


 <!-- Footer Start -->
    <?php include 'footer.php'; ?>
</body>
</html>
