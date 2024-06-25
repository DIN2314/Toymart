<?php
        include ($_SERVER["DOCUMENT_ROOT"]."/database/dbm.php");
        function read_s_data($t_name,$v_name,$c_f_name,$f_val)
        {
            $condt = "$c_f_name = '$f_val'";
            $read_result = read_db($t_name,$v_name,$condt,true);
            if(($read_result->num_rows)>0)
            {
                while($row = $read_result->fetch_assoc())
                {
                    return $row[$v_name];
                }
            }else{echo "No Anything";}
        }

        function v_ext($t_nme,$t_clm,$t_val)
        {
            $sql = "SELECT CONVERT((SELECT (EXISTS (SELECT * FROM `$t_nme` WHERE `$t_clm` = '$t_val'))),CHAR)as res";
            $ext_conn = connect();
            
            $result = $ext_conn->query($sql);
            if($result->num_rows>0)
            {
                while($row = $result->fetch_assoc())
                {
                    if($row["res"])
                    {
                        return true;
                    }
    
                    else
                    {
                        return false;
                    }
                }
                }else{echo "No Anything";}
                $ext_conn->close;
        }
?>