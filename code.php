<?php
include('config/db.php');

session_start();

if (isset($_REQUEST['loginbtn'])) {
    $email_1 = $_REQUEST['email'];
    $passwd_1 = $_REQUEST['passwd'];
    if (($email_1 != '') and ($passwd_1 != '')) {
        $query = "SELECT * FROM users WHERE email='$email_1' AND password='$passwd_1' LIMIT 1";
        $res = mysqli_query($conn,$query);
        if (mysqli_num_rows($res) > 0) {
            foreach($res as $row){
                $name = $row['name'];
                $email = $row['email'];
            }
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'user_name' => $name,
                'user_email' => $email,
            ];
            header("Location: index.php");
        }else{
            $_SESSION['status'] = "Invalid Username & Password";
            header('Location: login.php');
        }
    }
}


if (isset($_REQUEST['registerbtn'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['passwd'];
    $cpasswd = $_REQUEST['cpasswd'];
    if (($name != "") and ($email != "") and ($passwd != "") and ($cpasswd != "")) {
        echo "OK";
        $query2 = "INSERT INTO users(name,email,password)VALUES('$name','$email','$passwd')";
        $res = mysqli_query($conn,$query2);
        foreach($res as $row){
            $user_name = $name;
            $user_email = $email;
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "All Field's Are Required..";
        header('Location: register.php'); 
    }
}

if (isset($_REQUEST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

if (isset($_REQUEST['btn'])) {
    $name = $_SESSION['auth_user']['user_name'];
    $email = $_SESSION['auth_user']['user_email'];
    $phone = $_REQUEST['phone'];
    $msg = $_REQUEST['msg'];
    if (($phone != '') and ($msg != '')) {
        $query = "INSERT INTO contact(name,email,phone,msg)VALUES('$name','$email','$phone','$msg')";
        mysqli_query($conn,$query);
        header('Location: index.php');
    }
}

?>