
<?php
if($_SESSION['user_login']=='USER_LOGIN_YES'){

    if(isset($_GET['action'])) {
        if ($_GET['action'] == "transaction") {
            echo "
            <script>alert('Not Available at this moment');
            window.location = 'index.php?action=dashboard';</script>
            ";
        }
        if ($_GET['action'] == "add-student") {
            include "admin/add-student.php";
        }
        if($_GET['action']=="dashboard")
        {
            include "admin/dashboard.php";
        }
        if ($_GET['action'] == "usermanage") {
            include "admin/usermanage.php";
        }
        elseif ($_GET['action'] == "edit-student") {
                include "admin/edit-student.php";

            }

        elseif ($_GET['action'] == "list-student") {
            include "admin/list-student.php";
        }
    }

}
else{
    header('location:index.php?action=dashboard');
}
