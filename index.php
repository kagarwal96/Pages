<html>
<head>
    <?
        $err_username="";
        $err_password="";
    ?>
</head>
<body>
<form action="login.php" method="post">
    User Name: <input type="text" name="name"><br>
    <? echo $err_username; //error username invalid?>
    Password: <input type="password" name="password"><br>
    <? echo $err_password; //error username invalid?>
    <input type="submit">
</form>

</body>
</html>
