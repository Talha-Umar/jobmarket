      <header>
        <!-- start topbar -->
        <div class="jbm-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                        <ul class="dis-inline list-none jbm-topbar-contact">
                            <li>
                                <a href="index.php"><img src="assets/img/logo.png"></a>
                            </li>
                            
                        </ul>
                    </div>
                    <?php if (isset($_SESSION['id'])) { ?>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-right hidden-xs hidden-sm">
                        <ul class="dis-inline list-none  jbm-topbar-login">
                            <li>
                                <a href="alljob.php"><button class="btn btn-warning">Apply a job</button></a>
                            </li>
                            <li>
                                <a  href="logout.php">Logout</a>
                            </li>
                            
                        </ul>
        
                    </div>
                    <?php } else { ?>

                        <div class="col-md-6 col-sm-12 col-xs-12 text-right hidden-xs hidden-sm">
                        <ul class="dis-inline list-none  jbm-topbar-login">
                            
                            <li>
                                <a class="login-pop" href="#">Login</a>
                            </li>
                            <li>
                                <a class="register-pop" href="#">Register</a>
                            </li>
                        </ul>
        
                    </div>
                <?php } ?>

                </div>
            </div>
        </div>
        <!-- end topbar -->
    </header>
