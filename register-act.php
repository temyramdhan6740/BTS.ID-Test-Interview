<?php 
        include("register-api.php");
        $signin = json_decode(http_request_register_api('http://18.139.50.74:8080/register',$_POST['user'], $_POST['pass'], $_POST['email']), TRUE);
        ?>
        <div style="border: 1px solid black; padding: 20px;" align="center">
            <h1><?=$signin['statusCode'];?></h1>
            <span><?=$signin['message'];?></span>
            <p><?=$signin['errorMessage'];?></p>
        </div>