<?php

if (isset($_GET['user_name'])&&!empty($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);

    if ($user_name=='Alex'){
        echo 'you are the best '.$user_name;
    }
}
?>

<form action="index.php" method="get">
    Name: <input type="text" name="user_name"><br><br>
    <input type="Submit" value="Submit">
</form>
