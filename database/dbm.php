<?php
    function connect()
    {
        $server_name = "127.0.0.1:3306";
        $user_name = "root";
        $password = "Root@123";
        $database = "toymarket";

        $conn = new mysqli($server_name,$user_name,$password,$database);
        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function read_DB($t_name, $t_clm, $t_condition,bool $wh_req)
    {
        $sql = "";
        if($wh_req)
        {
            $sql = "SELECT $t_clm FROM $t_name WHERE $t_condition;";
        }
        else
        {
            $sql = "SELECT $t_clm FROM $t_name ;";
        }
        $read_conn = connect();
        $result = $read_conn->query($sql);
        return $result;
        $read_conn->close();
    }

    function ex_q($query)
    {
        $conn = connect();
        $sql = $query;

        if($conn->query($sql)===TRUE)
        {
            return true;
        }
        else
        {
            return false;
            echo "Error : " . $conn->error;   
        }
        $conn->close();
    }
?>