<?php
    
    function timeout()
    {    
            if(!isset($_SESSION["U_UNME"]))
                {
                    header("location: /login");
                }
                

    }

    function login()
    {        
        
        $tmpUNME = $_POST["txtUNAME"];
        $tmpPWD = $_POST["txtPWD"];
        
        if(read_s_data("Users","user_pwd","user_name","$tmpUNME")==$tmpPWD)
        {
            $tmpUTYP = read_s_data("Users","user_typ","user_name","$tmpUNME");
            if(session_set($tmpUNME,$tmpUTYP))
            {
                if($tmpUTYP==0)
                {
                    header("location: /user");
                }
                else
                {
                    header("location: /admin");
                }
            }
            else
            {
                echo "err";
            }

        }
        else
        {
            echo "<script>document.getElementById('id_lblERRORPWD').textContent = 'Wrong Password'; document.getElementById('id_lblERRORPWD').style.color = 'red';</script>";
        }
    }

    function logout(){
        session_unset();
        session_destroy();
        header("location: /login");
    }

    function session_set($u_name,$u_type)
    {
        ini_set('session.gc_maxlifetime',15);
        ini_set('session.cookie_lifetime',15);
        session_start();
        $_SESSION["U_UNME"] = $u_name;
        $_SESSION["U_UTYP"] = $u_type;
        if(isset($_SESSION["U_UNME"]))
        {
            return true;
        }
    }

    function sessionupd()
    {
        if(!isset($_SESSION["U_UNME"]))
        {
            session_start();
            setcookie(session_name(),session_id(),time()+15);
        }
    }
?>