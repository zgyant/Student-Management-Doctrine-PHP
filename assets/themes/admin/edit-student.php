<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Student
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Edit Students
                    </li>
                </ol>
            </div>
        </div>
<?php
        $id= $_GET['id'];
require_once "bootstrap.php";
$repository = $entityManager->getRepository('StudentDetail')->findBy(array('card_num' => $id));
foreach ($repository as $resultContent) {
    $studentname=$resultContent->getStudentName();
    $address=$resultContent->getAddress();
    $contact=$resultContent->getContactNum();
    $level=$resultContent->getLevel();
    $desc=$resultContent->getDetails();
}

?>
        <div class="row">
            <div class="col-lg-8">

                <form role="form" method="post" action="action.php?id=<?php echo $id ?>">


                    <div class="form-group">
                        <label>Full Name</label>
                        <input class="form-control" name="full_name" value ="<?php echo $studentname; ?>"placeholder="Enter Name of Student">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="address" value="<?php echo $address ?>" placeholder="Enter the Address">
                    </div>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input class="form-control" name="contact_num" value="<?php echo $contact ?>" placeholder="Contact Number">
                    </div>

                    <div class="form-group" style="display: none;">
                        <label>ID Card Number</label>
                        <input class="form-control" name="card_num"  placeholder="ID Card Number">
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option selected="selected">
                                <?php echo $level ?>
                            </option>
                            <option>L4DC</option>
                            <option>L5DC</option>
                            <option>BSc Hons</option>
                            <option>CCNA</option>
                            <option>CEH</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label>Additional Description</label>
                        <textarea class="form-control"  name="add_desc" rows="3"><?php echo $desc ?></textarea>
                    </div>



                    <div class="form-group">
                        <label>Activity</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="1">Active
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="0">Inactive
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="edit_student"  class="btn btn-default">Edit Records</button>


                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->