<?php    session_start();    include "../db/db_manipulation.php";    if (!empty($_GET['email'] || isset($_GET['email']))) {        $email=$_GET['email'];        if(registered($email)){          $token = bin2hex(random_bytes(50));          add_request($email, $_SESSION['uname'], $token);          echo "Кодът е изпратен на адрес $email";        }        else{            echo "Възникна грешка! Моля, презаредете страницата!";        }    }?>