<?php
require_once "bootstrap.php";
require "extraFun.php";

// Login Action
if(isset($_POST['login_submit'])){

    $username = $_POST['user_name'];
    $password = $_POST['pass_word'];
    $password = md5($password);
    $user = $entityManager->getRepository('User')->findOneBy(array('username'=>$username,'password'=>$password));
    if($user!=null){
        $_SESSION['user_login']="USER_LOGIN_YES";
        $_SESSION['user_name']=$user->getUserName();
        $_SESSION['user_type']=$user->getUserType();
        $id=$_SESSION['user_id']=$user->getId();
        $_SESSION['user_priv_add']= privOut($id)[0];
        $_SESSION['user_priv_up']= privOut($id)[1];
        $_SESSION['user_priv_del']= privOut($id)[2];

    }
    else
    {
        $_SESSION['error'] = "Incorrect Username or Password";
    }

    header('location:index.php?action=dashboard&msg=login');
}

if(isset($_POST['adduser']))
{

    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if(isset($_POST['password'])) {

        $password = $_POST['password'];
        $password=md5($password);
    }    if(isset($_POST['usertype'])) {

    $type = $_POST['usertype'];
    $newUser=new User();
    $newUser->setUsername($username);
    $newUser->setPassword($password);
    $newUser->setUsertype($type);
    $entityManager->persist($newUser);
    try{
        $entityManager->flush();

    }

    catch(Exception $e ){

    }
    header('location:index.php?action=usermanage&msg=newuseradded');
}
}


if(isset($_POST['permission']))
{
    if(isset($_POST['adddetails']))
    {
        $adddetails = $_POST['adddetails'];
    }
    else{
        $adddetails=0;
    }
    if(isset($_POST['editdetails'])) {
        $editdetails = $_POST['editdetails'];
    }else{
        $editdetails=0;
    }
    if(isset($_POST['deletedetails'])) {
        $deletedetails = $_POST['deletedetails'];
    }else{
        $deletedetails=0;
    }


    $username=$_POST['userlist'];
    $repository = $entityManager->getRepository('User')->findOneBy((array('username'=>$username)));
    $id= $repository->getId();

    $repository1 = $entityManager->getRepository('Privilege')->findOneBy((array('id'=>$id)));

    if(!$repository1)
    {
        //echo $newid=$repository1->getId();

        $newPrivileges=new Privilege();
        $newPrivileges->setAdddetail($adddetails);
        $newPrivileges->setDeletedetail($deletedetails);
        $newPrivileges->setUpdatedetail($editdetails);
        $newPrivileges->setId($id);
        $entityManager->persist($newPrivileges);
    }
    else
    {
echo "available";
        $repository1->setAdddetail($adddetails);
        $repository1->setDeletedetail($deletedetails);
        $repository1->setUpdatedetail($editdetails);
    }

    try{
        $entityManager->flush();

    }
    catch(Exception $e ){

        echo $e;
    }


  header('location:index.php?action=usermanage&msg=privlgedt');
}


if(isset($_POST['add_student']))
{
    if($_SESSION['user_priv_add']=='1') {
        $fname = $_POST['full_name'];
        $address = $_POST['address'];
        $contactnum = $_POST['contact_num'];
        $level = $_POST['level'];
        $desc = $_POST['add_desc'];
        $activity = $_POST['optionsRadios'];
        $cardnum = $_POST['card_num'];

        // $newStudent=new Student();
        // $newStudent->setCardNum($cardnum);

        $newStudentDetails = new StudentDetail();
        $newStudentDetails->setAddress($address);
        $newStudentDetails->setActivity($activity);
        $newStudentDetails->setContactNum($contactnum);
        $newStudentDetails->setDetails($desc);
        $newStudentDetails->setLevel($level);
        $newStudentDetails->setStudentName($fname);
        $newStudentDetails->setCardNum($cardnum);
        $entityManager->persist($newStudentDetails);

        //$entityManager->persist($newStudent);
        try {
            $entityManager->flush();

        } catch (Exception $e) {

            echo $e;
        }
        header('location:index.php?action=add-student&msg=added');
    }
    else{
        echo "<script>alert('Access Denied');
                window.location='index.php';
</script>";
    }
}

if(isset($_POST['edit_student']))
{

    if($_SESSION['user_priv_up']=='1') {
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
    try{
        $entityManager->flush();
    }
    catch(Exception $e ){

        echo $e;
    }
         header('location:index.php?action=list-student&msg=edited');
    }
    else{
        echo "<script>alert('Access Denied');
                window.location='index.php';
</script>";
    }
}
