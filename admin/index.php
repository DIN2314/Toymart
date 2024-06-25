<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <span name="lblUNME" id="id_lblUNME">[User Name]</span></h1> 
    <form method="post">
        <input type="submit" value="Logout" name="butLOUT">
    </form>
</body>
</html>

<?php
    include($_SERVER["DOCUMENT_ROOT"]. "/Login/User-Ops.php");
    sessionupd();
    timeout();
    
    if($_SESSION["U_UTYP"]==0)
    {
        logout();
    }
    else
    {
        switch($_SESSION["U_UTYP"])
        {
            case 1:
                header("location: /admin/Super-admin.php");
                break;
            case 2:
                header("location: /admin/HR-admin.php");
                break;
            default:
                logout();
                break;
        }
    }


?>