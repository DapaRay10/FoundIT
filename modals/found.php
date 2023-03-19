<?php

require_once "../config/conf.php";
Class Found
{
    public function __construct()
    {}
    public function get_data()
    {
        $sql = "SELECT * FROM found";
        return runQuery($sql);
    }

    public function insert($type_found, $desk)
    {
        $sql = "INSERT INTO found (type_found, desk) VALUES ('$type_found', '$desk')";
        return runQuery($sql);
    }

    public function update($id_user, $type_found, $desk)
    {
        $sql = "UPDATE found SET type_found='$type_found', desk='$desk' WHERE id_user = '$id_user'";
        return runQuery($sql);
    }
    
    public function show($id_user)
    {
        $sql = "SELECT * FROM found WHERE id_user='$id_user'";
        return runQueryRow($sql);
    }

    public function delete_data($id_user)
    {
        $sql = "DELETE FROM found WHERE id_user='$id_user'";
        return runQuery($sql);
    }
}

?>