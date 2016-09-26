<?php
require_once "bootstrap.php";

if (isset($_SESSION['error'])) {
    if (isset($_SESSION['error']) == 'Incorrect Username or Password') {
        $msg = "Incorrect Username or Password";
    }
}
?>
<body>


<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
    <h1> Login </h1>
</div>
<div class="container">
    <div class="bar" style="background:red;height:100%;color:white">   <?php if (isset($msg)) {
            echo $msg;
            unset($_SESSION['error']);
        } ?>
    </div>
    <div class="cardd"></div>
    <div class="card">
        <h1 class="title">Login</h1>

        <form action="action.php" method="post">
            <div class="input-container">
                <input type="text" name="user_name" id="Username" required="required"/>
                <label for="Username">Username</label>

                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" name="pass_word" id="Password" required="required"/>
                <label for="Password">Password</label>


            </div>

            <div class="button-container">
                <button type="submit" name="login_submit"><span>Go</span></button>
            </div>
            <div class="footer"><a href="#"></a></div>
        </form>
    </div>
</div>
