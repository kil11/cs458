<!DOCTYPE HTML>
<html>
    <head>
        <title> login</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="post" action="login.php">

        <h1>login</h1>
        <div class="texBoxdiv">
            <input type="text" placeholder="username" name="username">
        </div>
        <div class="texBoxdiv">
            <input type="password" placeholder="password" name="password">
        </div>

        <input type="submit" value="Login" class="loginBnt" name="loginBnt">
        </br>
    </form>   
    </body>
    <?php
    $conn = mysql_connect("localHost", "root", "");
    if (isset($_POST[''])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql= "SELECT  *  FROM websitelogin.logindetails WHERE username = '$username'";
        $result = mysql_query($conn, $sql);
        while($row= mysql_fetch_assoc($result)){
            $resultPassword = $row['password'];
            if($password == $resultPassword ){
                header('Location: welcome.html');
            }
        }

    }
    ?>

</html>    