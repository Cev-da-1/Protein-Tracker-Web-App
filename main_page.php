<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 80px;
        }

        .header button {
            background-color: #0d3d56;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }

        .main-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 80px;
            margin-top: 100px;
        }

        .main-button {
            background-color: #ff7043;
            color: white;
            padding: 50px 80px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 32px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="login.php">
            <button>Sign Out</button>
        </a>
        <button>Switch Account</button>
    </div>

    <div class="main-buttons">
        <a href="todays_food.php">
            <button class="main-button">Today's food</button>
        </a>
        <a href="protein_history.php">
            <button class="main-button">Protein history</button>
        </a>
        
    </div>
</body>
</html>
