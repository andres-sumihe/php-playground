<?php 
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body >
    <div style="margin-left: auto !important">
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Userneme </label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password </label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="password">
                    </td>
                </tr>
            </table>
            <a href="#" id="loginBtn">Login</a>
        </form>      
    </div>
    <script>
        $("#loginBtn").click(function(){
            $("form").submit()
        })
    </script>
</body>
</html>

<?php  

    function login($user, $pass){
        if($user === "672018136" && $pass === "password")
            return true;
        else return false;
    }

    if(isset($_POST["username"])){
        $user = $_POST["username"]; 
        $pass = $_POST["password"]; 
        if(login($user, $pass)){
            echo "Loggin";
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["login"] = true;
            $_POST = [];
            header('location: index.php');
        }
    }

?>
