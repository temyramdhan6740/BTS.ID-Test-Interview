<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <div style="border: 1px solid black; padding: 20px;" align="center">
        <h1>Sign Up</h1>
            <form method="post" action="login.php" id="formSignUp">
                <input type="text" name="user" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
                <input type="email" name="email" placeholder="Email" />
                <button type="button" onclick="register()">Sign Up</button>
            </form>
        </div>
        <div id="res" align="center"></div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            function register()
            {
                $("#res").html("Tunggu");
                $.ajax({
                    type    :   'POST',
                    url     :   'register-act.php',
                    data    :   $("#formSignUp").serialize(),
                    success :   function (data) {
                        $("#res").html(data);
                    }
                })
            }
        </script>
    </body>
</html>