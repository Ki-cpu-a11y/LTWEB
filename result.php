<?php
require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = add($num1, $num2);
            $operation_text = "Cộng";
            break;
        case 'subtract':
            $result = subtract($num1, $num2);
            $operation_text = "Trừ";
            break;
        case 'multiply':
            $result = multiply($num1, $num2);
            $operation_text = "Nhân";
            break;
        case 'divide':
            $result = divide($num1, $num2);
            $operation_text = "Chia";
            break;
        default:
            $result = "Không hợp lệ";
            $operation_text = "";
            break;
    }
} else {
    // Chuyển hướng về trang nhập liệu nếu truy cập trực tiếp
    header('Location: input.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang kết quả</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            text-align: center;
        }
        .result-line {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .result-line span {
            font-weight: bold;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Trang kết quả</h2>
        <div class="result-line"><span>Phép tính:</span> <?php echo $operation_text; ?></div>
        <div class="result-line"><span>Số 1:</span> <?php echo $num1; ?></div>
        <div class="result-line"><span>Số 2:</span> <?php echo $num2; ?></div>
        <div class="result-line"><span>Kết quả:</span> <?php echo $result; ?></div>
        <a class="back-link" href="input.php">Quay lại trang trước</a>
    </div>
</body>
</html>
