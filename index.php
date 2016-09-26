<?php

require_once "bootstrap.php";

if(isset($_SESSION['user_login']) && $_SESSION['user_login']=='USER_LOGIN_YES')
{
?>
    <?php require('assets/boxes/admin/header.php'); ?>

    <?php require('assets/main-content.php'); ?>

    <?php require('assets/boxes/admin/footer.php'); ?>

    <?php
}
else
{
    ?>
    <?php require('assets/boxes/login/header.php'); ?>

    <?php require('assets/main-content.php'); ?>

    <?php require('assets/boxes/login/footer.php');?>

    <?php
}

?>


