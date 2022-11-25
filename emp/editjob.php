<?php
        session_start();
        $jobid=$_REQUEST['jobid'];
        $empid=$_SESSION['id'];
        
              include("../db.php");

                 if(isset($_POST['updatejob'])){

                    $title = $_POST['title'];
                    $jobtype = $_POST['jobTypeNew'];
                    $Min_Salary = $_POST['Min_Salary'];
                    $Max_Salary = $_POST['Max_Salary'];
                    $Min_experience = $_POST['Min_experience'];
                    $Max_experience = $_POST['Max_experience'];
                    $city = $_POST['city'];
                    $pin = $_POST['pin'];
                    $description = $_POST['description'];
                    $Company_Name = $_POST['Company_Name'];
                    $email = $_POST['email'];
                    $Mobile = $_POST['Mobile'];
                    $Category = $_POST['category'];
                    
                    
                    


            $sql = mysqli_query($con, "UPDATE jobs SET job_title='$title', salarymin='$Min_Salary',  salarymax='$Max_Salary', experience_min='$Min_experience', experience_max='$Max_experience', cid='$city', cate_id='$Category', pin_code='$pin', job_description='$description', company_name='$Company_Name', company_email='',phone_no='$Mobile' WHERE id='$jobid'") ;

             if($sql)  {
               echo "<script>alert('Successful job updated');</script>";
                echo '<script type="text/javascript">
           window.location = "postedjobs.php"
      </script>';
            }
             else{
                 echo "<script>alert('ERROR'); ';</script>";
            }
          }



        ?>










<html>
<head>
                
        <title>Update Job</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cache-control" content="no-transform">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
       
    
        <!--For AMP Pages-->

      <link href="https://teja10.kuikr.com/css/jobs/common-merge.1629696369.css" rel="stylesheet">
      <link href="https://teja10.kuikr.com/css/jobs/post-free-ad.1629696374.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://teja10.kuikr.com/css/jobs/feedback.1629696390.css">

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
      <h4 class="text-transform inlineHeader inlineBlock"> Post a job </h4>
    </div>
<?php 
$sql1 = "SELECT * FROM jobs where id='$jobid' and emp_id='$empid'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1)
?>
    <div class="text-left StepOne">
      <div class="row clearfix">
    <div class="col-sm-12 col-md-12 col-lg-12 jobInput ">
        <div class="form-group jsBanWordContainer">
        <label for="JobTitle" class="mandatory-label">Job Title<span class="mandatory-input">*</span></label> 

        <input type="text" class="form-control jsCharLimit jsBanWordCheck" autofocus="" autocomplete="off" id="postad-title" name="title" placeholder="Eg. Sales executives needed urgently for ..." maxlength="150" value="<?php echo $row1['job_title']; ?>" required="">
    </div>
   </div>
<div class="col-sm-12 col-md-12 col-lg-12 jobInput job-type-options">
    <div class="form-group">
        <label for="Job_Type" class="mandatory-label">Job Type<span class="mandatory-input">*</span></label>
        <div id="jsHomeRole" class="dropdown">
            <ul class="jsSaytList jsJobTypeList" id="jobtyeUlId">
                     <li>
                        <input type="radio" name="jobTypeNew" class="jobtype checkbox-custom" id="272" data-value="Full Time Jobs" required="">                                                
                        <label for="272" class="checkbox-custom-label">Full Time Jobs</label>
                    </li>
                    <li>
                        <input type="radio" name="jobTypeNew" class="jobtype checkbox-custom" id="273" data-value="Part Time Jobs" required="">                                                
                        <label for="273" class="checkbox-custom-label">Part Time Jobs</label>
                    </li>
                    <li>
                        <input type="radio" name="jobTypeNew" class="jobtype checkbox-custom" id="277" data-value="Work From Home" required="">                                                
                        <label for="277" class="checkbox-custom-label">Work From Home</label>
                    </li>
                    
                    <li>
                        
                        <input type="radio" name="jobTypeNew" class="jobtype checkbox-custom" id="296" data-value="Work Abroad" required="">                                                
                        <label for="296" class="checkbox-custom-label">Work Abroad</label>
                    </li>
                </ul>
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
                    <input type="tel" id="postad-salary-min" name="Min_Salary" maxlength="5" autocomplete="off" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="<?php echo $row1['salarymin']; ?>" required="">
                </div>
                <span class="error-msg" id="postad-salary-min-error"></span>
            </div>
            <div class="col-lg-6 col-xs-6 col-sm-6 no-left-padding">
                <label for="Salary" class="mandatory-label invisible">Max</label>
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1">Max</span>
                    <input type="tel" id="postad-salary-max" name="Max_Salary" maxlength="5" autocomplete="off" class="form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="<?php echo $row1['salarymax']; ?>" required="">
                </div>
            </div>
        </div>
    </div>

    <!-- Experience -->
            <div class="form-group experienceGroup">
                <div class="row">
                        <div class="col-lg-6 col-xs-6 col-sm-6">
                            <label for="Experience" class="mandatory-label">Experience</label>
                            <div class="input-group">
                                <span class="input-group-addon">Min</span>
                                <input type="text" id="postad-experience-min" class="form-control dropdown-toggle" data-toggle="dropdown" placeholder="Select Exp.." aria-haspopup="true" name="Min_experience" value="<?php echo $row1['experience_min']; ?>" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-sm-6 no-left-padding">
                            <label for="Experience" class="mandatory-label invisible">Max</label>
                            <div class="input-group">
                                <span class="input-group-addon">Max</span>
                                <input type="text" id="postad-experience-max" class="form-control dropdown-toggle" placeholder="Select Exp.." data-toggle="dropdown" aria-haspopup="true" name="Max_experience" value="<?php echo $row1['experience_max']; ?>" required="">
                              
                            </div>
                        </div>
                </div>
            </div>
        <!-- Experience -->

             <div class="form-group">
                <label for="SelectCity" class="mandatory-label"><span class="jsCityNameDisplay">City</span><span class="mandatory-input">*</span></label>
                <div id="jsHomeRole" class="dropdown">
                    <select name="city" class="form-control" onchange="getteacherid()">
                                  <option value="<?php echo $row1['cid']; ?>"><?php $cityid=$row1['cid'];
                                   $sql2 = "SELECT * FROM city where id='$cityid'";
                                  $result2 = mysqli_query($con, $sql2);
                                  $row2 = mysqli_fetch_assoc($result2);
                                  echo $row2['city_name'];
                                   ?></option>

                                  <?php

                                       $sql = mysqli_query($con, "SELECT id , city_name From city");

                                        $row = mysqli_num_rows($sql);

                                         while ($row = mysqli_fetch_array($sql)){

                                          echo "<option value='". $row['id'] ."'>" .$row['city_name'] ."</option>" ;
                                         }
                                        ?>
                                </select>
                 </div>
            </div>
             <div class="form-group">
                <label for="SelectCity" class="mandatory-label"><span class="jsCityNameDisplay">Category</span><span class="mandatory-input">*</span></label>
                <div id="jsHomeRole" class="dropdown">
                    <select name="category" class="form-control" onchange="getteacherid()">
                                  <option value="<?php echo $row1['cate_id']; ?>">
                                    <?php $cateid=$row1['cate_id'];
                                    $sql3 = "SELECT * FROM category where id='$cateid'";
                                  $result3 = mysqli_query($con, $sql3);
                                  $row3 = mysqli_fetch_assoc($result3);
                                  echo $row3['cate_name'];
                                     ?>
                                  </option>

                                  <?php

                                       $sql = mysqli_query($con, "SELECT * From category");

                                        $row = mysqli_num_rows($sql);

                                         while ($row = mysqli_fetch_array($sql)){

                                          echo "<option value='". $row['id'] ."'>" .$row['cate_name'] ."</option>" ;
                                         }
                                        ?>
                                </select>
                 </div>
            </div>
            <div class="form-group filterModal localFilter " id="selectLocalityDiv">
                <label for="SelectLocality" class="mandatory-label">Pin code</label>
                <div id="jsHomeRole" class="styled-select jskeepopen dropdown">
                    <input type="text" data-class="jslocality" id="postad-locality-freetext" autocomplete="off" placeholder="Pin code" class="drop-input jsSayt " name="pin" value="<?php echo $row1['pin_code']; ?>" required="">
                </div>
            </div>

</div>

    <div class="col-sm-12 col-md-12 col-lg-12 jobInput">
        <div class="form-group jsBanWordContainer">
            <label for="JobDescription" class="mandatory-label">Job Description<span class="mandatory-input">*</span></label>
            <textarea class="form-control jsCharLimit jsBanWordCheck" id="postad-desc" placeholder="Type or paste the Job Description here. Only plain text is supported." name="description" maxlength="3000"  required=""><?php echo $row1['job_description'];?> </textarea>
        </div>
    </div>          
    <div class="col-sm-12 col-md-12 col-lg-12 jobInput j50 recDetails">
            <div class="recruitDetailsWarn">
              <span class="recruiterHeader">Recruiter details</span>
              <span class="inlineBlock">(Cannot be changed later)</span>
            </div>
            <div class="row">
              <div class="clearfix">
                <div class="form-group jsBanWordContainer">
                  <label for="Hiring_Company_Name">Hiring for <span class="fontNormal">(Company name)</span></label>
                  <input type="text" class="form-control jsCharLimit jsCompany jsBanWordCheck" name="Company_Name" id="postad-hiring-companyname" maxlength="50" value="<?php echo $row1['company_name']; ?>" required="">
                </div>
  
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1" class="mandatory-label">Email<span class="mandatory-input">*</span></label>
                <div class="styled-select">
                  <input type="email" class="form-control form-control-dropdown" name="email" id="postad-email" value="<?php echo $row1['company_email']; ?>" required="">
                </div>
              </div>
              <div class="form-group mobileGroup">

                <label for="Mobile" class="mandatory-label">Phone<span class="mandatory-input">*</span></label>
                <div class="checkbox checkbox-msg" style="display:inline-block;position: relative;margin-bottom: 0px;float: right;right: 3px;">
                    <label>
                  </div>
                <div class="input-group">
                  <div class="input-group-addon">+91</div>
                     <div class="styled-select">
                    <input type="text" class="form-control form-control-dropdown" name="Mobile" id="postad-mobile" value="<?php echo $row1['phone_no']; ?>" required="">
                   </div>
                </div>
              </div>


            </div>
          </div>

    <div class="col-lg-12">
        <div class="col-lg-4">
        </div>
         <div class="col-lg-4">
           <input type="submit" name="updatejob"class="btn btn-warning" value="Update your Job" style="height: 40px;">
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