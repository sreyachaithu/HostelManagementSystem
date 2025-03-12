<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- Inline CSS -->
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url("sss.jpg") no-repeat center center fixed; /* Make sure the path is correct */
            background-size: cover;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .logo h1 a {
            color: #ffffff;
            text-decoration: none;
            font-size: 24px;
            text-align: center;
            display: block;
            margin-bottom: 20px;
        }

        .form-right-inf h2 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .one-frm input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px auto;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-style {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            text-transform: uppercase;
            margin-top: 10px;
        }

        .btn-style:hover {
            background: #0056b3;
        }

        .already {
            margin: 15px 0 10px;
            font-size: 14px;
        }

        .already a {
            color: #007BFF;
            text-decoration: none;
        }

        .already a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-------------- Login Form ----------------------------------------------->
    <section>
        <div class="wrapper">
            <div class="logo">
                <h1><a class="brand-logo" href="index.html">Hostel Management System</a></h1>
            </div>
            <div class="form-right-inf">
                <h2>Student Login</h2>
                <div class="login-form-content">
                    <form action="student_backend/login.inc.php" method="post">
                        <div class="one-frm">
                            <input type="text" name="student_roll_no" placeholder="Roll No" required autofocus>
                        </div>
                        <div class="one-frm">
                            <input type="password" name="pwd" placeholder="Password" required>
                        </div>
                        <button class="btn-style" name="student-login">Login</button>
                        <p class="already">Login as <a href="index_ha.php">Admin</a> | <a href="index_hm.php">Hostel Manager</a></p>
                        <p class="already">Don't have an account? <a href="index_signup.php">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

