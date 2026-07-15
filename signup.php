<?php
    include("database.php");
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
		$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

		if (empty($username)){
			$errors["username"] = "Please enter a username";
		}
		elseif (empty($password)){
			$errors["password"] = "Please enter a password";
		}
		else{
			$sql = "INSERT INTO users (user, password)
					VALUES ('$username', '$password')";

			try{
				mysqli_query($conn, $sql);
				header("main_page.php");
			}
			catch (mysqli_sql_exception){
				$errors["username"] = "That username is taken";
			}
		}

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        .signup-container {
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

        .terms-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .terms-group input[type="checkbox"] {
            margin-right: 8px;
            width: 18px;
            height: 18px;
        }

        .terms-group a {
            color: #4a90e2;
            text-decoration: none;
        }

        .signup-btn {
            background-color: #1a3a52;
            color: white;
            padding: 12px 40px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="profile-icon">
            <svg width="100" height="100" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="#f4c542"/>
                <circle cx="50" cy="35" r="15" fill="none" stroke="#e67e50" stroke-width="4"/>
                <path d="M 30 70 Q 50 55 70 70" fill="none" stroke="#e67e50" stroke-width="4"/>
                <path d="M 30 70 Q 50 85 70 70" fill="#f4c542"/>
            </svg>
        </div>
        <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "post">
            <div class = "form-group">
                <label for = "email">Email</label>
                <input type = "email" id = "email" name = "email" placeholder = "example@email.com">
                <?php ?>
            </div>

            <div class = "form-group">
                <label for = "password">Password</label>
                <input type = "password" id = "password" name = "password">
            </div>

            <div class = "terms-group">
                <input type="checkbox" id="terms" name = "terms">
                <label for = "terms">Agree to our terms & conditions <a href = "#">here</a></label>
            </div>

            
            <button type = "submit" class = "signup-btn">Sign up</button>
        </form>
    </div>
</body>
</html>