<?php
session_start();
include '../core/fuctions.php';
include '../core/validation.php';
$errors = [];
if(checkRequestMethod('POST') &&  checkPostInput('name')) {

    foreach($_POST as $key =>$value) {
       $$key= santizeInput($value);

         
    }

    // **name is required => min and max**

    if (!requiredVal($name)){
       $errors[]= "name is reqired";
    }
    elseif(!minVal($name,3)) {
      $errors[]= "name must be grater than 3";
    }
    elseif(!MaxVal($name,25)) {
       $errors[]= "name must be smaler  than 25";
    }

        // email is required and you must be valid **

    if (!requiredVal($email)){
        $errors[]= "email is reqired";
     }
     elseif(!emailVal($email)) {
       $errors[]= "please type is a valid email";
     }


    //  password is required  and min /max **


     if (!requiredVal($password)){
        $errors[]= "password is reqired";
     }
     elseif(!minVal($password,6)) {
       $errors[]= "password must be grater than 6";
     }
     elseif(!MaxVal($password,20)) {
        $errors[]= "password must be smaler  than 20";
     }

    if(empty($errors)){
       $user_files= fopen("../data/users.csv","a+");
       $data=[$name,$email,sha1($password)];
       fputcsv($user_files,$data);
       $_SESSION['auth']= [$name,$email];
       redirect("../index.php");
       die();
    }

    else {
        $_SESSION['errors']=$errors;
        redirect("../register.php");
        die;
    }
    // var_dump($errors);
}

else {
    echo "doesn't supported method";
}
// echo $name;
    //  $name =santizeInput($_POST['name']);
    //  $email = santizeInput($_POST['email']);
    //  $password =santizeInput($_POST['password']);
    
    //  echo $email;
    //  echo $password;
            // echo  $key ." : " . $value . '<br>';
