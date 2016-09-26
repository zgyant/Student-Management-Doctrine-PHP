<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    List Student/s
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> List Students
                    </li>
                </ol>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="listTable">
                <thead>
                <tr>
                    <th>Card Number</th>
                    <th>Student Name</th>
                    <th>Activity</th>
                </tr>
                </thead>
                <tbody>

                <?php
                require_once "bootstrap.php";
                $repository = $entityManager->getRepository('StudentDetail')->findAll();
                foreach ($repository as $resultContent) {
                    $studentname = $resultContent->getStudentName();
                    $id = $resultContent->getCardNum();
                    $active = $resultContent->isActivity();
                    if ($active == 1)
                        $active = "Active";
                    else
                        $active = "Inactive";
                    //$mid = ceil(mysql_num_rows($resultContent->getStudentName()/2));
                    //echo $mid;
                    if ($active == "Inactive") {
                        echo '<tr class="danger"><td>' . $id . '</td><td><a href="index.php?action=edit-student&id=' . $id . '">' . $studentname . '</a></td><td>' . $active . '</td></tr>';

                    } else {
                        echo '<tr class="active"><td>' . $id . '</td><td><a href="index.php?action=edit-student&id=' . $id . '">' . $studentname . '</a></td><td>' . $active . '</td></tr>';
                    }

                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="row">

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<script>
    $(function () {
        $("#listTable").dataTable();
    })
</script>