<?php
require_once "bootstrap.php";
require "extraFun.php";
class action
{
// Login Action
            public function login($entityManager)
            {
                $username = $_POST['user_name'];
                $password = $_POST['pass_word'];
                $password = md5($password);
                $user = $entityManager->getRepository('User')->findOneBy(array('username' => $username, 'password' => $password));
                if ($user != null) {
					$extraFun=new extraFun();
                    $_SESSION['user_login'] = "USER_LOGIN_YES";
                    $_SESSION['user_name'] = $user->getUserName();
                    $_SESSION['user_type'] = $user->getUserType();
                    $id = $_SESSION['user_id'] = $user->getId();
                    $_SESSION['user_priv_add'] = $extraFun->privOut($id)[0];
                    $_SESSION['user_priv_up'] = $extraFun->privOut($id)[1];
                    $_SESSION['user_priv_del'] = $extraFun->privOut($id)[2];

                } else {
                    $_SESSION['error'] = "Incorrect Username or Password";
                }

                header('location:index.php?action=dashboard&msg=login');
            }

            public function adduser($entityManager)
            {

                if (isset($_POST['username'])) {
                    $username = $_POST['username'];
                }

                if (isset($_POST['password'])) {

                    $password = $_POST['password'];
                    $password = md5($password);
                }
                if (isset($_POST['usertype'])) {

                    $type = $_POST['usertype'];
                    $newUser = new User();
                    $newUser->setUsername($username);
                    $newUser->setPassword($password);
                    $newUser->setUsertype($type);
                    $entityManager->persist($newUser);
                    try {
                        $entityManager->flush();

                        $newPriv=new Privilege();
                    } catch (Exception $e) {
                        echo $e;
                    }
                   header('location:index.php?action=usermanage&msg=newuseradded');
                }
            }


            public function permission($entityManager)
            {
                if (isset($_POST['adddetails'])) {
                    $adddetails = $_POST['adddetails'];
                } else {
                    $adddetails = 0;
                }
                if (isset($_POST['editdetails'])) {
                    $editdetails = $_POST['editdetails'];
                } else {
                    $editdetails = 0;
                }
                if (isset($_POST['deletedetails'])) {
                    $deletedetails = $_POST['deletedetails'];
                } else {
                    $deletedetails = 0;
                }


                $username = $_POST['userlist'];
                $repository = $entityManager->getRepository('User')->findOneBy((array('username' => $username)));
                $id = $repository->getId();

                $repository1 = $entityManager->getRepository('Privilege')->findOneBy((array('id' => $id)));

                if (!$repository1) {
                    //echo $newid=$repository1->getId();

                    $newPrivileges = new Privilege();
                    $newPrivileges->setAdddetail($adddetails);
                    $newPrivileges->setDeletedetail($deletedetails);
                    $newPrivileges->setUpdatedetail($editdetails);
                    $newPrivileges->setId($id);
                    $entityManager->persist($newPrivileges);
                } else {
                    echo "available";
                    $repository1->setAdddetail($adddetails);
                    $repository1->setDeletedetail($deletedetails);
                    $repository1->setUpdatedetail($editdetails);
                }

                try {
                    $entityManager->flush();


                } catch (Exception $e) {

                    echo $e;
                }


                header('location:index.php?action=usermanage&msg=privlgedt');
            }


            public function addStudent($entityManager)
            {
                if ($_SESSION['user_priv_add'] == '1') {
                    $fname = $_POST['full_name']; //gets fullname from the form
                    $address = $_POST['address']; //address from the form
                    $contactnum = $_POST['contact_num']; //contact from the form
                    $level = $_POST['level']; //level from the form
                    $desc = $_POST['add_desc']; //description from the form
                    $activity = $_POST['optionsRadios']; //Active status from the form
                    $cardnum = $_POST['card_num']; //gets card number
                    $newStudentDetails = new StudentDetail(); //creates new object of StudentDetail inside src/StudentDetail.php
					//Using Setter Methods
                    $newStudentDetails->setAddress($address); 
                    $newStudentDetails->setActivity($activity);
                    $newStudentDetails->setContactNum($contactnum);
                    $newStudentDetails->setDetails($desc);
                    $newStudentDetails->setLevel($level);
                    $newStudentDetails->setStudentName($fname);
                    $newStudentDetails->setCardNum($cardnum);
					//Inserting in the Database
                    $entityManager->persist($newStudentDetails);
                    try {
                        $entityManager->flush();

                    } catch (Exception $e) {

                        echo $e;
                    }
                    header('location:index.php?action=add-student&msg=added');
                } else {
					//error popup
                    echo 
					"<script>alert('Access Denied');
					window.location='index.php';
					</script>";
                }
            }

            public function editStudent($entityManager)
            {

                if ($_SESSION['user_priv_up'] == '1') {
                    $username = $_SESSION['user_name'];
                    // $userRepo=$entityManager->getRepository('User')->getUserId($username);

                    //if(!$userRepo){echo "not found";}

                    //$priviRepo->isAdddetail();


                    $id = $_GET['id'];
                    $repository = $entityManager->getRepository('StudentDetail')->find($id);

                    $fname = $_POST['full_name'];
                    $address = $_POST['address'];
                    $contactnum = $_POST['contact_num'];
                    $level = $_POST['level'];
                    $desc = $_POST['add_desc'];
                    $activity = $_POST['optionsRadios'];
                    $cardnum = $_POST['card_num'];

                    echo $_SESSION['user_priv_add'];
                    echo $_SESSION['user_priv_up'];
                    echo $_SESSION['user_priv_del'];


                    if (!$repository) {
                        echo "not found";
                    }
                    echo $_SESSION['user_priv_up'];
                    $repository->setAddress($address);
                    $repository->setActivity($activity);
                    $repository->setContactNum($contactnum);
                    $repository->setDetails($desc);
                    $repository->setLevel($level);
                    $repository->setStudentName($fname);
                    $repository->setCardNum($cardnum);
                    //$entityManager->persist($repository);
                    try {
                        $entityManager->flush();
                    } catch (Exception $e) {

                        echo $e;
                    }
                    header('location:index.php?action=list-student&msg=edited');
                } else {
                    echo "<script>alert('Access Denied');
                window.location='index.php';
</script>";
                }
            }
}
if (isset($_POST['login_submit']))
{

   action::login($entityManager);
}
if (isset($_POST['adduser']))
{

    action::adduser($entityManager);
}
if (isset($_POST['permission']))
{

    action::permission($entityManager);
}
if (isset($_POST['add_student']))
{

    action::addStudent($entityManager);
}
if (isset($_POST['edit_student']))
{

    action::editStudent($entityManager);
}

?>
