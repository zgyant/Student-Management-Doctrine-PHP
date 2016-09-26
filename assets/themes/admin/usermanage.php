<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manage Users
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Manage Users
                    </li>
                </ol>
            </div>
        </div>

        <form role="form" method="post" action="action.php">
            <div class="form-group">
               <p> <label>Username</label>
                <input class="form-control" name="username" placeholder="Enter Username"></p>
            </div>
            <div class="form-group">
             <p>   <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter Password"></p>
            </div>
            <div class="form-group">
            <label for="sel1">Type:</label>
            <select class="form-control" name="usertype" id="sel1">
                <option>Admin</option>
                <option>User</option>

            </select>
    </div>
            <button type="submit" name="adduser"  class="btn btn-default">Add User</button>
        </form>
<br/><div class="privDiv">
        <h3>Edit Privileges</h3>
        <form role="form" method="post" action="action.php">
            <div class="form-group">
            <select class="form-control" name="userlist" id="sel1">
                <?php
                require_once "bootstrap.php";
                $repository = $entityManager->getRepository('User')->findAll();
                foreach ($repository as $resultContent) {
                    echo '<option>' . $resultContent->getUsername() . '</option>';
                }
                ?>
            </select>
                </div>
            <div class="checkbox">
                <label><input type="checkbox"  name ="editdetails" value="1">Edit Details</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="adddetails" value="1">Add Details</label>
            </div>
            <div class="checkbox" style="display: none;">
                <label><input type="checkbox" name="deletedetails" value="1" >Delete Details</label>
            </div>

            <button type="submit" name="permission"  class="btn btn-default">Edit Privileges</button>
        </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<style>
    .form-group{
        width: 15%;
    }

</style>