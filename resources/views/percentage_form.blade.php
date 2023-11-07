<!DOCTYPE html>
<html>

<head>
    <title>Percentage Calculator</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 110vh; */
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .form-container {
            width: 100%;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            padding: 1px 1px 20px 25px;
        }

        input {
            width: 100%;
            padding: 12px 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=submit] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Percentage Calculator</h1>
        <div class="form-container">
            <form method="post" action="">
                @csrf
                <label for="subject1">Subject 1:</label>
                <input type="number" id="subject1" name="subject1" required min="0" value="<?php echo isset($_POST['subject1']) ? $_POST['subject1'] : ''; ?>"><br><br>

                <label for="subject2">Subject 2:</label>
                <input type="number" id="subject2" name="subject2" required min="0" value="<?php echo isset($_POST['subject2']) ? $_POST['subject2'] : ''; ?>"><br><br>

                <label for="subject3">Subject 3:</label>
                <input type="number" id="subject3" name="subject3" required min="0" value="<?php echo isset($_POST['subject3']) ? $_POST['subject3'] : ''; ?>"><br><br>

                <label for="subject4">Subject 4:</label>
                <input type="number" id="subject4" name="subject4" required min="0" value="<?php echo isset($_POST['subject4']) ? $_POST['subject4'] : ''; ?>"><br><br>

                <label for="subject5">Subject 5:</label>
                <input type="number" id="subject5" name="subject5" required min="0" value="<?php echo isset($_POST['subject5']) ? $_POST['subject5'] : ''; ?>"><br><br>

                <input type="submit" value="Calculate Percentage">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Get the input values
                $subject1 = isset($_POST['subject1']) ? floatval($_POST['subject1']) : 0;
                $subject2 = isset($_POST['subject2']) ? floatval($_POST['subject2']) : 0;
                $subject3 = isset($_POST['subject3']) ? floatval($_POST['subject3']) : 0;
                $subject4 = isset($_POST['subject4']) ? floatval($_POST['subject4']) : 0;
                $subject5 = isset($_POST['subject5']) ? floatval($_POST['subject5']) : 0;

                // Calculate the percentage
                $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
                $percentage = ($totalMarks / 500) * 100;

                // Display the result
                echo '<h5>Calculated Percentage</h5>';
                echo '<p>Percentage: ' . $percentage . '%</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>