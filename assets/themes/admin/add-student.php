<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Student
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Add Student
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">

                <form role="form" method="post" action="action.php">


                    <div class="form-group">
                        <label>Full Name</label>
                        <input class="form-control" name="full_name" placeholder="Enter Name of Student">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="address" placeholder="Enter the Address">
                    </div>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input class="form-control" name="contact_num" placeholder="Contact Number">
                    </div>

                    <div class="form-group" style="display: none;">
                        <label>ID Card Number</label>
                        <input class="form-control" name="card_num" placeholder="ID Card Number">
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option>L4DC</option>
                            <option>L5DC</option>
                            <option>BSc Hons</option>
                            <option>CCNA</option>
                            <option>CEH</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Additional Description</label>
                        <textarea class="form-control" name="add_desc" rows="3"></textarea>
                    </div>


                    <div class="form-group">
                        <label>Activity</label>

                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>Active
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="0">Inactive
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="add_student" class="btn btn-default">Insert Records</button>

                    <button type="reset" class="btn btn-default">Reset</button>

                </form>

            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->