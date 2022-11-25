

        <?php 
        session_start();
        if (!isset($_SESSION['id'])) {

echo "<script>alert('Login before apply');</script>";
               echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
        } 
        
              include("db.php");
              $jobid=$_REQUEST['job_id'];

                 if(isset($_POST['addjob'])){

                    $name = $_POST['Name'];
                    $email = $_POST['Email'];
                    $Mobile = $_POST['Mobile'];
                    $Min_Salary = $_POST['Min_Salary'];
                    $Max_Salary = $_POST['Max_Salary'];
                    $Min_experience = $_POST['Min_experience'];
                    $Max_experience = $_POST['Max_experience'];
                    $Education = $_POST['Education'];
                    $canid=$_SESSION['id'];
                      
                    
                    


            $sql = mysqli_query($con, "INSERT INTO `applicant`(`aname`, `email`, `whatsapp`, `salary_min`, `salary_max`, `experience_max`, `experience_min`,`education`, `job_id`, `can_id`) VALUES ('$name','$email','$Mobile','$Min_Salary','$Max_Salary','$Max_experience','$Min_experience','$Education','$jobid','$canid')") ;

             if($sql)  {
               echo "<script>alert('Job applied Successfully');</script>";
               echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
            }
             else{
                 echo "<script>alert('ERROR'); ';</script>";
            }
          }



        ?>










<html>
<head>
                
        <title>Appy Job</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cache-control" content="no-transform">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
       
    
        <!--For AMP Pages-->

      <link href="https://teja10.kuikr.com/css/jobs/common-merge.1629696369.css" rel="stylesheet">
      <link href="https://teja10.kuikr.com/css/jobs/post-free-ad.1629696374.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://teja10.kuikr.com/css/jobs/feedback.1629696390.css">
      <!-- stylesheets-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
       
       <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      

      <style>
  .custom-form-controls input[type=checkbox]:checked+label:before {
    content: "✓" !important;
  }

  .hireHeader h3 {
    font-size: 24px;
    color: #fff;
    margin-top: 60px;
    font-weight: 600;
    line-height: 26px;
    margin-bottom: 10px;
  }

  .newLoginModal {
    background: white;
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, .3);
    left: 50%;
    max-width: 650px;
    min-height: 450px;
    position: fixed;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    z-index: 1001;
  }

  .newLoginModal .ajLoader {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  @media (max-width: 767px) {
    .newLoginModal {
      max-height: 100vh;
    }
  }

  #newLoginModalBG {
    background: rgba(255, 255, 255, 0.6);
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1000;
  }


</style>

      </head>

    <body>
      
<form id="Postfreeform" method="post">

  <div class="Cover">
    <div class="row">
      <div class="exceedLimit jsExceedLimit jsExceedLimitNew" style="display:none">
          <div class="s1 text-center sub-title jsExceedTotalFreeAdLimit" style="display:none">
              <div class="s1 text-center sub-title">
              </div>
          </div>
      </div>
    </div>

  <!--End : Post ad monetization feature detail -->
  <!--Step 1 -->
  <div class="Form-Element jsPostAdForm" id="formFirst">
    <div class="PostAdWcontent hidden-xs">
      <h3 >Apply For Job : <span class="text-transform inlineHeader inlineBlock">
        <?php 
        $sql1 = "SELECT * FROM jobs WHERE id='$jobid'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);
echo $row1['job_title'];
        ?>
      </span></h3>
    </div>
<br>
    <div class="text-left StepOne">
      <div class="row clearfix">
    <div class="col-sm-12 col-md-12 col-lg-12 jobInput ">
        
        <div class="form-group jsBanWordContainer">
        <label for="JobTitle" class="mandatory-label">Full Name<span class="mandatory-input">*</span></label> 

        <input type="text" class="form-control jsCharLimit jsBanWordCheck" id="postad-title" name="Name" placeholder="Enter Your Full Name" value="" required="true">
    </div>

         <div class="form-group">
                <label for="exampleInputEmail1" class="mandatory-label">Email<span class="mandatory-input">*</span></label>
                <div class="styled-select">
                  <input type="email" class="form-control form-control-dropdown" name="Email" id="postad-email" required="true">
                </div>
              </div>
        
        <div class="form-group mobileGroup">

                <label for="Mobile" class="mandatory-label">Whatsapp<span class="mandatory-input">*</span></label>
                <div class="checkbox checkbox-msg" style="display:inline-block;position: relative;margin-bottom: 0px;float: right;right: 3px;">
                    <label>
                  </div>
                <div class="input-group">
                  <div class="input-group-addon">+91</div>
                     <div class="styled-select">
                    <input type="text" class="form-control form-control-dropdown" name="Mobile" id="postad-mobile" required="true">
                   </div>
                </div>
              </div>

   </div>

<div class="col-sm-12 col-md-12 col-lg-12 jobInput j50 ">
    <div class="form-group salaryGroup">
        <div class="row">
            <div class="col-lg-6 col-xs-6 col-sm-6">
                <label for="Salary" class="mandatory-label">Monthly salary<span class="mandatory-input">*</span></label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Min</span>
                    <input type="number" id="postad-salary-min" name="Min_Salary" maxlength="5" autocomplete="off" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  required="true">
                </div>
                <span class="error-msg" id="postad-salary-min-error"></span>
            </div>
            <div class="col-lg-6 col-xs-6 col-sm-6 no-left-padding">
                <label for="Salary" class="mandatory-label invisible">Max</label>
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1">Max</span>
                    <input type="number" id="postad-salary-max" name="Max_Salary" maxlength="5" autocomplete="off" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  required="true">
                </div>
            </div>
        </div>
    </div>

    <!-- Experience -->
            <div class="form-group experienceGroup">
                <div class="row">
                        <div class="col-lg-6 col-xs-6 col-sm-6">
                            <label for="Experience" class="mandatory-label">Experience<span class="mandatory-input">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon">Min</span>
                                <input type="text" id="postad-experience-min" class="form-control dropdown-toggle" data-toggle="dropdown" placeholder="Select Exp.." aria-haspopup="true" name="Min_experience" required="true">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-sm-6 no-left-padding">
                            <label for="Experience" class="mandatory-label invisible">Max</label>
                            <div class="input-group">
                                <span class="input-group-addon">Max</span>
                                <input type="text" id="postad-experience-max" class="form-control dropdown-toggle" placeholder="Select Exp.." data-toggle="dropdown" aria-haspopup="true" name="Max_experience" required="true">
                              
                            </div>
                        </div>
                </div>
            </div>
        <!-- Experience -->

                   

</div>

    <div class="col-sm-12 col-md-12 col-lg-12 jobInput">
        <div class="form-group jsBanWordContainer">
            <label for="JobDescription" class="mandatory-label">Education<span class="mandatory-input">*</span></label>
            <textarea class="form-control jsCharLimit jsBanWordCheck" id="postad-desc" placeholder="Enter Your Qualification" name="Education" maxlength="3000" value="" required=""></textarea>
        </div>
    </div>          
   

    <div class="col-lg-12">
        <div class="col-lg-4">
        </div>
         <div class="col-lg-4">
           <input type="submit" name="addjob"class="btn btn-warning" value="Apply a Job" style="height: 40px;">
        </div>
         <div class="col-lg-4">
        </div>
    </div>   
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$('input[name="Min_Salary"]').change(function() {
  var x = parseFloat($(this).val());
  var y=1500;
  var z=x+y;
    $('input[name="Max_Salary"]').val(z);
});

$('input[name="Max_Salary"]').change(function() {
  var x = parseFloat($(this).val());
  var y=1500;
  var z=x-y;
    $('input[name="Min_Salary"]').val(z);
});

});
</script>

 </body>
</html>