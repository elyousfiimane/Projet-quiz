<?php
    require("cnct.php");

    if(isset($_POST["mail"])&& isset($_POST["pw"])){
        $mail = $_POST["mail"];
        $pw = $_POST["pw"];
        $sql = "select email, password from player where email = '$mail' and password = '$pw'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row["password"]==$pw){
            header("Location: pagequiz.php");
        }
        else {
            header("location: failed.html");
        }
    }
?>
<html lang="en">
<head>
    <title>Loging in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="" method="post">
    <div class="d1">
        <h1 class="zehead">Login</h1>

        <div>
            <div class="d2">
                <label for="mail">Email: </label>
                <input type="email" id="mail" name="mail" class="i1">
            </div>

            <div class="d2">
                <label for="pw">Password: </label>
                <input type="password" id="pw" name="pw" class="i1">
            </div>
        </div>
        <div class="d3">
            <input type="submit" value="Submit" class="but">
        </div>
    </div>
    </form>
</body>
</html>
