<!-- <form method="post">
    <p>User Name : <input type="text" name="txtUNAME" id="id_txtUNAME" placeholder ="User Name"></p>
    <p>Password :<input type="password" name="txtPWD" id="id_txtPWD" placeholder ="Password"></p>
    <input type="submit" value="Sign In" name="butLOGIN">
    <p name="lblERRORPWD" id= "id_lblERRORPWD">pwd Error msg</p>
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background">
        <div class="toy" id="toy1"></div>
        <div class="toy" id="toy2"></div>
        <div class="toy" id="toy3"></div>
        <div class="toy" id="toy4"></div>
        <div class="toy" id="toy5"></div>
        <div class="toy" id="toy6"></div>
        <div class="toy" id="toy7"></div>
        <div class="toy" id="toy8"></div>
        <div class="toy" id="toy9"></div>
        <div class="toy" id="toy10"></div>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="txtUNAME" id="id_txtUNAME" placeholder ="User Name" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="txtPWD" id="id_txtPWD" required>
            </div>
            <button type="submit" name="butLOGIN">Login</button>
        </form>
        <p id="id_lblERRORPWD"></p>
    </div>

</body>
</html>


<?php

    include ($_SERVER["DOCUMENT_ROOT"]. "/database/datr.php");
    include($_SERVER["DOCUMENT_ROOT"]. "/Login/User-Ops.php");
    if(array_diff_key($_POST,["butLOGIN"]))
    {
        login();
    }

   
?>

