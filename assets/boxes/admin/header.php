<?php
ob_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/resources/images/favicon.ico" type="image/x-icon"/>
    <title>SMS | Dashboard</title>
    <!-- jQuery -->
    <script src="assets/resources/js/jquery.js"></script>
    <script src="assets/resources/js/jquery.dataTables.js"></script>
    <script src="assets/resources/js/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="assets/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/resources/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/resources/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/resources/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>


    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/resources/js/src/chart/canvasjs.min.js"></script>


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"
         style="background: #f8f8f8;border-color:#e7e7e7;color: black;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><span style="color: crimson">SMS</span> Dashboard</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">


            <li class="dropdown">
                <a href="#" style="color:black;" class="dropdown-toggle" data-toggle="dropdown"><i
                        class="fa fa-user"></i> <?php echo $_SESSION['user_name'] ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="userguide.pdf" target="_blank"><i class="fa fa-fw fa-info"></i> Help</a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="color:black">
            <ul class="nav navbar-nav side-nav" style="border-right: 1px solid #e7e7e7;background-color: #f8f8f8;
    border-color: #e7e7e7;">

                <li>
                    <a href="index.php?action=dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="index.php?action=transaction"><i class="fa fa-area-chart"></i> Transactions</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i
                            class="fa fa-graduation-cap"></i> Students <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">

                        <li>
                            <a href="index.php?action=list-student"><i class="fa fa-sort-amount-asc"></i> List Student/s</a>
                        </li>
                        <li>
                            <a href="index.php?action=add-student"><i class="fa fa-plus"></i> Add Student</a>
                        </li>

                    </ul>
                </li>
                <?php
                if ($_SESSION['user_type'] == 'admin') {
                    echo ' <li>
                            <a href="index.php?action=usermanage"><i class="fa fa-group"></i> Manage Users</a>
                        </li>';
                } else {
                    echo '';
                }
                ?>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </nav>

