<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Nhập liệu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 450px; /* Tăng độ rộng của bảng */
            padding: 30px; /* Tăng padding để bảng dài hơn */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
        }
        .operation-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Trang Nhập liệu</h2>
        <form method="post" action="result.php">
            <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
            <div class="operation-container">
                <label><input type="radio" name="operation" value="add" checked> Cộng</label>
                <label><input type="radio" name="operation" value="subtract"> Trừ</label>
                <label><input type="radio" name="operation" value="multiply"> Nhân</label>
                <label><input type="radio" name="operation" value="divide"> Chia</label>
            </div>
            Số thứ nhất: <input type="text" name="num1" required>
            <br><br>
            Số thứ hai: <input type="text" name="num2" required>
            <br><br>
            <input type="submit" value="Tính">
        </form>
    </div>
</body>
</html>
