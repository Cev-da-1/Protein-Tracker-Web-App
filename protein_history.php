<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein History</title>
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

        .date-selector {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .arrow-btn {
            background-color: transparent;
            border: 2px solid #666;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .date-display {
            padding: 10px 30px;
            border: 2px solid #666;
            border-radius: 5px;
            background-color: white;
            font-size: 14px;
        }

        .chart-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            border: 2px solid #ccc;
        }

        .y-axis-label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: rotate(-90deg) translateX(-50%);
            font-size: 14px;
            color: #666;
        }

        .chart {
            width: 100%;
            height: 300px;
            position: relative;
            border-left: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
        }

        .chart-line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .line-path {
            fill: none;
            stroke: #333;
            stroke-width: 2;
        }

        .x-axis-labels {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
            font-size: 14px;
            color: #666;
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

    <div class="date-selector">
        <button class="arrow-btn">◄</button>
        <div class="date-display">Stats from the week commencing (DD/MM/YY)</div>
        <button class="arrow-btn">►</button>
    </div>

    <div class="chart-container">
        <div style="position: relative;">
            <div class="y-axis-label">Protein (g)</div>
            <div class="chart">
                <svg class="chart-line" viewBox="0 0 700 250">
                    <polyline 
                        points="0,180 100,150 200,160 300,140 400,170 500,150 600,155 700,150"
                        class="line-path"
                    />
                </svg>
            </div>
            <div class="x-axis-labels">
                <span>Monday</span>
                <span>Tuesday</span>
                <span>Wednesday</span>
                <span>Thursday</span>
                <span>Friday</span>
                <span>Saturday</span>
                <span>Saturday</span>
            </div>
        </div>
    </div>
</body>
</html>
