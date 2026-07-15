<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            text-align: center;
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .profile-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
        }

        .profile-icon img {
            width: 100%;
            height: 100%;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-btn {
            background-color: #1a3a52;
            color: white;
            padding: 12px 40px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .signup-link a {
            color: #4a90e2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="profile-icon">
            <svg width="100" height="100" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="#f4c542"/>
                <circle cx="50" cy="35" r="15" fill="none" stroke="#e67e50" stroke-width="4"/>
                <path d="M 30 70 Q 50 55 70 70" fill="none" stroke="#e67e50" stroke-width="4"/>
                <path d="M 30 70 Q 50 85 70 70" fill="#f4c542"/>
            </svg>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="example@email.com">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password">
        </div>

        
        <a href="main_page.php">
            <button class="login-btn">Login</button>
        </a>

        <div class="signup-link">
            Haven't got an account?<br>
            <a href="signup.php">Sign up</a>
        </div>
    </div>
</body>
</html>


<?php
    include("database.php");

?>