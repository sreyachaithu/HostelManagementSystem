<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS - Student SignUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url("z.jpg") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: black; /* Black background for the form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            text-align: center;
            color: white; /* White text color */
        }

        .form input,
        .form select {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background: #333; /* Dark background for inputs */
            color: white; /* White text inside input/select fields */
        }

        .form button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #0275d8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form button:hover {
            background-color: #0056b3;
        }

        .form .message {
            margin: 10px 0;
            font-size: 14px;
            color: #ccc; /* Light gray for message text */
        }

        .form .message a {
            color: #0275d8; /* Blue link color */
            text-decoration: none;
        }

        .form h1,
        .form .message-sign-up {
            color: white; /* White color for headings */
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="form">
           <!-- <h1>Signup Form</h1>-->
          
            <form action="student_backend/signup.inc.php" method="POST">
                 <h1 class="message-sign-up">Student Sign Up</h1>

                <input type="text" placeholder="Roll No" name="username" required>

                <input type="text" placeholder="First Name" name="f_name" required>

                <input type="text" placeholder="Last Name" name="l_name" required>

                <select name="gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>

                <select name="year" required>
                    <option value="" disabled selected>Year of study</option>
                    <option value="1">1st year</option>
                    <option value="2">2nd year</option>
                    <option value="3">3rd year</option>
                    <option value="4">4th year</option>
                </select>

                <select name="dept" required>
                    <option value="" disabled selected>Department</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="ME">ME</option>
                    <option value="EP">EP</option>
                    <option value="CE">CE</option>
                </select>

                <input type="text" placeholder="Mobile" name="mobile" pattern="[0-9]{10}" required title="Please enter a valid 10-digit mobile number">

                <input type="password" placeholder="Password" name="password" required minlength="6" title="Password must be at least 6 characters">

                <input type="password" placeholder="Re-Enter Password" name="confpassword" required>

                <button type="submit" name="signup-student">Sign Up</button>

                <p class="message">Already registered? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>

