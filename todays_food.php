<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Food</title>
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
            margin-bottom: 40px;
        }

        .back-btn {
            background-color: #0d3d56;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        .protein-goal-btn {
            background-color: #ff7043;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        .content {
            display: flex;
            gap: 30px;
            max-width: 1200px;
        }

        .left-section {
            flex: 1;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .food-list {
            max-height: 500px;
            overflow-y: auto;
        }

        .food-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .food-input {
            flex: 1;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: white;
            font-size: 14px;
            text-align: center;
            color: #999;
        }

        .delete-btn {
            background-color: #ffd54f;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .right-section {
            flex: 1.2;
        }

        .selection-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .add-btn {
            background-color: #4a90e2;
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 28px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .selection-list {
            max-height: 500px;
            overflow-y: auto;
        }

        .selection-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .food-button {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background-color: #ff7043;
            color: white;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
        }

        .edit-btn {
            background-color: #ffd54f;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-btn::before {
            content: "✎";
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="main_page.php">
            <button class="back-btn">Back</button>
        </a>
        <button class="protein-goal-btn">Daily protein goal</button>
    </div>

    <div class="content">
        <div class="left-section">
            <h1 class="section-title">Today's Food</h1>
            <div class="food-list">
                <div class="food-item">
                    <input type="text" class="food-input" value="Food" readonly>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="food-item">
                    <input type="text" class="food-input" value="Food" readonly>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="food-item">
                    <input type="text" class="food-input" value="Food" readonly>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="food-item">
                    <input type="text" class="food-input" value="Food" readonly>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="food-item">
                    <input type="text" class="food-input" value="Food" readonly>
                    <button class="delete-btn">🗑</button>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="selection-header">
                <h1 class="section-title">Food Selection:</h1>
                <button class="add-btn">+</button>
            </div>
            <div class="selection-list">
                <div class="selection-item">
                    <button class="food-button">Food</button>
                    <button class="edit-btn"></button>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="selection-item">
                    <button class="food-button">Food</button>
                    <button class="edit-btn"></button>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="selection-item">
                    <button class="food-button">Food</button>
                    <button class="edit-btn"></button>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="selection-item">
                    <button class="food-button">Food</button>
                    <button class="edit-btn"></button>
                    <button class="delete-btn">🗑</button>
                </div>
                <div class="selection-item">
                    <button class="food-button">Food</button>
                    <button class="edit-btn"></button>
                    <button class="delete-btn">🗑</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
