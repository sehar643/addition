<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFF8DC;
            margin: 0;
        }

        .container {
            margin-top: 50px;
        }

        .result-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #2E8B57;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        td {
            color: #000000;
            font-weight: bold;
        }

        th {
            background-color: #DB7093;
            color: #fff;
        }

        a.btn {
            margin-top: 20px;
            background-color: #DB7093;
            font-weight: bold;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "Addition":
                $result = $num1 + $num2;
                break;

            case "Subtraction":
                $result = $num1 - $num2;
                break;

            case "Multiply":
                $result = $num1 * $num2;
                break;

            case "Divide":
                    $result = $num1 / $num2;
                break;

            case "Modulus":
                    $result = $num1 % $num2;
                break;

            default:
                echo "Invalid attempt";
        }
        ?>
        <div class="result-container">
            <h2>Calculation Result</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Number 1</th>
                        <th>Number 2</th>
                        <th>Operation</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $num1; ?></td>
                        <td><?php echo $num2; ?></td>
                        <td><?php echo $operation; ?></td>
                        <td><?php echo $result; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="index.html" class="btn">Go Back</a>
    </div>
</body>
</html>

