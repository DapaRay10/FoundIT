<?php
    require '../config/conf.php';

    Class User{
        public function __construct()
        {

        }
        public function login($nik, $password)
        {
            $sql = "SELECT * FROM user WHERE nik='$nik' AND
            password='$password' ";
            return runQuery($sql);
        }
    }
