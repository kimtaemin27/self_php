<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <?php
        include('/Users/gimtaemin/Desktop/git/workspace/self_php/process/load.php');
        include('/Users/gimtaemin/Desktop/git/workspace/self_php/process/login/login_load.php');
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
    <!-- <div id="all">
        <div>
            <h1>Login</h1>
        </div>
        <ul>
            <li>
                <span>ID</span>
                <span>
                    <input type="text" name="id" placeholder="ID">
                </span>
            </li>
            <li>
                <span>PASSWORD</span>
                <span>
                    <input type="password" name="pass" placeholder="PASSWORD">
                </span>
            </li>
            <button type="button" class="btn btn-primary">GO!</button>
            <button type="button" class="btn btn-primary">회원가입</button>
        </ul>
    </div> -->
</body>
</html>