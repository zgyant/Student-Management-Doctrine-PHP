<?php
if (isset($_GET['msg'])) {

    if ($_GET['msg'] == 'edited') {
        echo ' <div class="alert alert-success  fade in"  style="margin-bottom: 0;border-radius: 0">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo ' <strong>Success!</strong> Edited Successfully.';
    }
    if ($_GET['msg'] == 'login') {
        if (isset($_SESSION['user_name'])) {
            $username = $_SESSION['user_name'];
            echo ' <div class="alert alert-success  fade in"  style="margin-bottom: 0;border-radius: 0">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo ' <strong>Login Success!</strong> Welcome <b>' . $username . '</b>';
        };
    }
    if ($_GET['msg'] == 'added') {
        echo ' <div class="alert alert-success  fade in" style="margin-bottom: 0;border-radius: 0">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo ' <strong>Success!</strong> Added New Student Successfully.';
    }
    if ($_GET['msg'] == 'privlgedt') {
        echo ' <div class="alert alert-danger  fade in" style="margin-bottom: 0;border-radius: 0">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo ' <strong>Warning!</strong> Permission Edited.';
    }
    if ($_GET['msg'] == 'newuseradded') {
        echo ' <div class="alert alert-info  fade in" style="margin-bottom: 0;border-radius: 0">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo ' <strong>Success!</strong> Added User Successfully.';
    }
    echo '</div>';
}
?>

<?php
if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'USER_LOGIN_YES') {
    include("assets/themes/admin-dash.php");
    if ($_SERVER['REQUEST_URI'] == "/CollegeProject/index.php") {

        echo "<script>location.href = 'index.php?action=dashboard'</script>";
    }
} else {
    include("assets/themes/login-dash.php");
}
?>

