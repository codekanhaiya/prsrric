<!DOCTYPE html>
<html>

<head>
    <title>PRSRRIC Admin</title>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale-1.0" name="viewport" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <div class="main">
        <div class="header">
            <h1>|| Admin Pannel ||</h1>
        </div>


        <div class="page">

            <div class="item">
                <img src="img/cap.svg" alt="Graduation-Cap">
                <h3><u>REGISTRATION</u></h3>
            </div>

            
            <form method="post" action="submit.php">

                <div class="inputBox">
                    <input type="text" name="username" autocomplete="off" required />
                    <label>username</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="password" autocomplete="off" required />
                    <label>password</label>
                </div>

                <input type="submit" name="submit" value="submit" />


            </form>
        </div>

        <div class="header">
            <p>Already have an account? <a href="adminLogin.php">Click On</a></p>
        </div>

    </div>

</body>

</html>
