<?php
    if(isset($_REQUEST["lastname"]) || isset($_REQUEST["age"]) || isset($_REQUEST["pass"])){
        if(preg_match("/[^A-Za-z'-]/",$_REQUEST['pass'] )){
            echo "Welcome ".$_REQUEST['lastname']."<br/>";
            echo "You are ".$_REQUEST['age']." years old<br/>";
            echo "My password is ".$_REQUEST['pass']."."." This is secured";
        }
        else{
            die("Password complexity does not meet. Your password must contain 1 Uppercase and 1 lowercase and 1 number.");
        }
    }
?>