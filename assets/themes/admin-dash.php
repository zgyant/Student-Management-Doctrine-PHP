<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "transaction") {
        echo "
            <script>alert('Not Available at this moment');
            window.location = 'index.php?action=dashboard';</script>
            ";
    } else if ($_GET['action'] == "add-student") {
        include "admin/add-student.php";
    } else if ($_GET['action'] == "dashboard") {
        include "admin/dashboard.php";
    } else if ($_GET['action'] == "usermanage") {
        include "admin/usermanage.php";
    } elseif ($_GET['action'] == "edit-student") {
        include "admin/edit-student.php";

    } elseif ($_GET['action'] == "list-student") {
        include "admin/list-student.php";
    } else {
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];
        header('location:index.php?action=dashboard&msg=ss');
    }
}
?>

