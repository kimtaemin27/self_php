<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <?php
        define('ROOT','/Users/gimtaemin/Desktop/git/workspace/self_php/process');
        include ROOT.('/load.php');
        include ROOT.('/login/login_load.php');
    ?>
</head>
<body>

    <form action="login_check.php">
        <h1>Login</h1>
        <ul>
            <a>ID</a>
            <input type="text" name="id" placeholder="ID">
        </ul>
        
    </form>
</body>
</html>