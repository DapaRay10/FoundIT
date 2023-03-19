<?php
        require_once("../modals/user.php");
        $user = new User();

        $nik = $_POST['nik'];
        $password = $_POST['password'];

        if(empty($nik) AND empty($password)){
            header("Location:".BASE_URL."login.html");
            exit();
        }else{
            header("Location: ../html/table.php");
        }

        
    
?>
