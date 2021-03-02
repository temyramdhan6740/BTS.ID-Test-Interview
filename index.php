<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div style="border: 1px solid black; padding: 20px;" align="center">
        <h1>Sign In</h1>
            <form method="post" action="login.php" id="formSign">
                <input type="text" name="user" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
                <button type="button" onclick="login()">Sign In</button>
            </form>
        </div>
        <div id="res" align="center"></div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            function login()
            {
                $("#res").html("Tunggu");
                $.ajax({
                    type    :   'POST',
                    url     :   'login.php',
                    data    :   $("#formSign").serialize(),
                    success :   function (data) {
                        $("#res").html(data);
                    }
                })
            }
        </script>
    </body>
</html>