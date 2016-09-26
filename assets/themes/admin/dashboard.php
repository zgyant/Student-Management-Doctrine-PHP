<?php
{

    require_once "bootstrap.php";
    $repository = $entityManager->getRepository('StudentDetail')->findAll();
    $stdnts = array();
    foreach ($repository as $resultContent) {
        $active = $resultContent->isActivity();
        $stdnts[] = [$resultContent->getCardNum()];

        $level = $resultContent->getLevel();
        //$level.'<br/>';
        if ($level == "CCNA") {
            $ccna[] = [$level];
        } elseif ($level == "L4DC") {
            $l4dc[] = [$level];
        } elseif ($level == "L5DC") {
            $l5dc[] = [$level];
        } elseif ($level == "CEH") {
            $ceh[] = [$level];
        } elseif ($level == "BSc Hons") {
            $bsch[] = [$level];
        }
        if ($active == 1) {

            $status[] = [$active];
        }
        if ($active == 0) {

            $statusIn[] = [$active];
        }
    }
    $students = count($stdnts);
    if (isset($status)) {
        $activeStd = count($status);
    } else {
        $activeStd = 0;
    }
    //echo count($level);
    // echo $activeStd;
    if (isset($statusIn)) {
        $inactiveStd = count($statusIn);
    } else {
        $inactiveStd = 0;
    }
    // echo $inactiveStd;

    if (isset($ccna)) {
        $ccna = count($ccna);
    } else {
        $ccna = 0;
    }
    if (isset($ceh)) {

        $ceh = count($ceh);
    } else {
        $ceh = 0;
    }
    if (isset($l4dc)) {
        $l4dc = count($l4dc);
    } else {
        $l4dc = 0;
    }
    if (isset($l5dc)) {
        $l5dc = count($l5dc);
    } else {
        $l5dc = 0;
    }
    if (isset($bsch)) {
        $bsch = count($bsch);
    } else {
        $bsch = 0;
    }
    //  echo $l4dc;


}


?>

<script type="text/javascript">
    window.onload = function () {

    }
</script>


<script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("pieChart",
            {
                title: {
                    text: "Active and Inactive Users"
                },
                exportFileName: "Pie Chart",
                exportEnabled: false,
                animationEnabled: true,
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                data: [
                    {
                        type: "pie",
                        showInLegend: true,
                        toolTipContent: "{legendText}: <strong>{y} student</strong>",
                        indexLabel: "{label} {y}",
                        dataPoints: [
                            {y: <?php echo $activeStd;?>, legendText: "Active", indexLabel: "Active"},
                            {y: <?php echo $inactiveStd;?>, legendText: "Inactive", indexLabel: "Inactive"}
                        ]
                    }
                ]
            });
        chart.render();

        var barchart = new CanvasJS.Chart("barChart",
            {
                title: {
                    text: "Level Distribution"
                },
                animationEnabled: true,
                axisY: {
                    title: "No. of students"
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                theme: "theme1",
                data: [

                    {
                        type: "column",
                        showInLegend: false,
                        legendMarkerColor: "grey",
                        legendText: "",
                        dataPoints: [
                            {y: <?php echo $l4dc; ?>, label: "L4DC"},
                            {y: <?php echo $l5dc; ?>, label: "L5DC"},
                            {y: <?php echo $bsch; ?>, label: "Bsc Hons"},
                            {y: <?php echo $ccna; ?>, label: "CCNA"},
                            {y: <?php echo $ceh; ?>, label: "CEH"}
                        ]
                    }
                ]
            });

        barchart.render();
    }
</script>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">


            </div>
        </div>
        <div id="headerinfo" style="width: 100%">
            <div class="headInfo"
                 style="width: 15%; height:70px;background-color: #66b3ff;margin-bottom: 40px;margin-left: 20px; float:left; text-align: center;padding-top:5px;color:white;font-size: 50px;font-family: 'Yu Gothic Light'">
                5<span style="font-size: 20px">Levels</span>
            </div>
            <div class="headInfo" style="width: 15%;
         height:70px;background-color:#bf80ff;margin-bottom: 40px;
         margin-left: 20px;clear: both;text-align: center;padding-top:5px;color:white;font-size: 50px;font-family: 'Yu Gothic Light'">
                <?php echo $students
                ?><span style="font-size: 20px">Students</span>
            </div>
            <div class="headInfo" style="width: 15%; height:70px;background-color:#99e699;margin-bottom: 40px;
        margin-left: 20px;text-align: center;color:white;font-size: 23px;font-family: 'Yu Gothic Light'">
                <span style="font-size: 20px">Logged in as:</span> <?php echo $_SESSION['user_type']; ?>
            </div>
            <div class="headInfo" style="width: 78%; height:285px;background-color:black;margin-bottom: 40px;
        margin-left: 20px;float: right;margin-top:-327px;">
                <img src="assets/resources/image/dash.jpg" width="100%" height="285"/></div>
        </div>
        <div class="row">

            <div id="pieChart" style="height: 250px; width: 25%;float:left;"></div>
            <div id="barChart" style="height: 250px; width: 25%;margin-left:50%;"></div>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->