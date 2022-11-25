<?php session_start();
include 'db.php';
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}

if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
           
            $check_code = "SELECT * FROM candidate WHERE cemail = '$email' UNION
         SELECT * FROM employer WHERE email = '$email'";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $userid = $fetch_data['id'];
            if ($fetch_data['type']==='emp') {
            $update_pass = "UPDATE employer SET code = $code, password = '$password' WHERE email = '$email'";
              }
              if ($fetch_data['type']==='can') {
            $update_pass = "UPDATE candidate SET code = $code, cpassword = '$password' WHERE cemail = '$email'";
              }
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: index.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
}
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Create a New Password</title>
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
            <h3>New Password</h3>
        </div>
        <form accept="" method="post">
          <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
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
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
        </form>
        <br>
        
    </div>
    <!-- Main Content End -->


 <!-- Footer Start -->
    <?php include 'footer.php'; ?>
</body>
</html>
