<html>
    <head>
        <title>Login / Register</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                line-height: 1.7;
            }

            h1 {
                text-decoration: underline overline;
            }

            div {
                margin: 5% 33%;
                border: 2px solid black;
                padding: 15px;
            }

            footer {
                padding: 15px;                
                background-color: #f2f2f2;
            }

        </style>
    </head>
    <body>
        <center>
            <div class="login">
            <h1>Login</h1>
                <form action="logging.php" method="POST">
                    <label for="userid">Username: </label>
                    <br>
                    <input type="text" name="userid" placeholder="md_sameer" autofocus>
                    <br>
                    <label for="password">Password: </label>
                    <br>
                    <input type="password" name="password">
                    <br>
                    <input type="submit" name="Login" value="Login">
                </form>
            </div>
            <div class="register">
                <form action="registering.php" method="POST">
                    <h1>Register</h1>
                    <label for="name">Full Name: </label>
                    <input type="text" name="name" placeholder="Muhammed Sameer">
                    <br>
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="itsmdsameerkhan@gmail.com" size="25">
                    <br>
                    <label for="userid">Username: </label>
                    <input type="text" name="userid" placeholder="dpson.stha">
                    <br>
                    <label for="password">Password: </label>
                    <input type="password" name="password">
                    <br>
                    <label for="age">Age: </label>
                    <input type="number" name="age" min="12" max="85" placeholder="18">
                    <br>
                    <input type="radio" name="gender" value="M"> Male
                    <input type="radio" name="gender" value="F"> Female
                    <br>
                    <input type="submit" value="Register Now !" name="register">
                </form>
            </div>
        </center>
        <footer>
            <p>Created By: MD Sameer [NP03A180008]</p>
            <p>Week 3 Assessment. Summer Enrichment 2019.</p>
        </footer>
    </body>
</html>