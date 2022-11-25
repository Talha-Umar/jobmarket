<header>
        <!-- start topbar -->
        <div class="jbm-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                        <ul class="dis-inline list-none jbm-topbar-contact">
                            <li>
                                <a href="postedjobs.php"><img src="../assets/img/logo.png"></a>
                            </li>
                            <li>
                                <a href="postedjobs.php"></i>Jobs</a>
                            </li>
                            <li>
                                <a href="candidates.php">Candidate</a>
                            </li>
                        </ul>
                    </div>
                    <?php if (isset($_SESSION['id'])) { ?>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-right hidden-xs hidden-sm">
                        <ul class="dis-inline list-none  jbm-topbar-login">
                            <li>
                                <a href="postjob.php"><button class="btn btn-warning">Post a job</button></a>
                            </li>
                            <li>
                                <a  href="../logout.php">Logout</a>
                            </li>
                            
                        </ul>
        
                    </div>
                    <?php } else { ?>

                         echo "<script>window.location = '../index.php';</script>";
                <?php } ?>

                </div>
            </div>
        </div>
        <!-- end topbar -->
    </header>