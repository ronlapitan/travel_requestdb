<?php include 'header.php'; ?>
        
<div class="row">

    <div class="col-md-4">

    </div>
                        
            <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            
                            <div class="panelhead">
                                <!-- <img src="images/iwep_logo.png"> -->
                                <h1>Login</h1>
                                <hr>
                            </div>

                            <form action="login_process.php" method="POST" id="loginform">

                                <div class="form-group">

                                    <div class="inner-addon left-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                    </div>

                                </div>

                                <div class="form-group">.

                                    <div class="inner-addon left-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            <span id="login"></span>
                                    </div>
                                    

                                </div><br>

                                <div class="pull-left">
                                    <button type="reset" class="btn btn-danger custom">Clear</button>
                                </div>
                                
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary custom">Login</button>
                                </div><br><br>
                                <hr>

                                <div class="forgotpassword">
                                    <a href="forgot_password.php">I forgot my password</a>
                                </div>
                                
                            </form>

                        </div>
                    </div>
            </div>
                

    <div class="col-md-4">

    </div>

</div>






<?php include 'footer.php'; ?>