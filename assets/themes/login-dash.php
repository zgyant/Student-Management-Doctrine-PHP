<?php
require_once "bootstrap.php";
include_once "action.php";
if (isset($_SESSION['error'])) {
    if (isset($_SESSION['error']) == 'Incorrect Username or Password') {
        $msg = "Incorrect Username or Password";
    }
}
?>
<body class="flat-blue login-page">
<div class="container">
    <div class="login-box">
        <div>
            <div class="login-form row">
                <div class="col-sm-12 text-center login-header">
                    <i class="login-logo" ><img style="width: 50%" src="/collegeproject\assets\resources\image\logo.png" /></i>
                </div>
                <div class="col-sm-12">
                    <div class="login-body">
                        <div class="progress hidden" id="login-progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 100%">
                                Log In...
                            </div>
                        </div>
						   <div class="bar" style="background:red;height:100%;color:white">   <?php if (isset($msg)) {
            echo $msg;
            unset($_SESSION['error']);
        } ?>
    </div>
					<form action="action.php" method="post">
                            <div class="control">
                                <input type="text" id="username" name="user_name" value="" required="required"
                                       placeholder="username" class="form-control"/>
                            </div>
                            <div class="control">
                                <input type="password" placeholder="Password" id="password" name="pass_word" class="form-control" required="required"/>
                            </div>
                            <div class="login-button text-center">
                                <input type="submit" id="_submit" name="login_submit" class="btn btn-primary" value="Log in"/>
                                <div id="loginLoader" type="button" class="text-center hidden"><i class="fa fa-spinner fa-spin"></i></div>
                            </div>
                        </form>
                    </div>
                    <div class="login-footer">
                        <span class="text-right"><a href="#" class="color-white" style="color:#337ab7;">Forgot password?</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
