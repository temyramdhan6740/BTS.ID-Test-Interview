<?php 
        include("login-api.php");
        $signin = json_decode(http_request('http://18.139.50.74:8080/login',$_POST['user'], $_POST['pass']), TRUE);
        session_start();
        if ($signin['statusCode'] != 401) {
            $_SESSION['token'] = $signin['data']['token'];
            $session_set = "Token sudah di set";
        }else{
            $session_set = "Token gagal di set";
        }
        ?>
        <div style="border: 1px solid black; padding: 20px;" align="center">
            <h1><?=$signin['statusCode'];?></h1>
            <span><?=$signin['message'];?></span>
            <p><?=$session_set;?></p>
        </div>