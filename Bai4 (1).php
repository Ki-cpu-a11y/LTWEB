<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            margin: 5px 0;
        }
        .highlight {
            font-weight: bold;
            color: #d9534f;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ARRAY FUNCTIONS</h1>
    <?php
        // Mảng ban đầu
        $array = [5, 2, 9, 1, 7, 3];

        // Hàm tìm giá trị lớn nhất trong mảng
        function findMax($arr) {
            return max($arr);
        }

        // Hàm tìm giá trị nhỏ nhất trong mảng
        function findMin($arr) {
            return min($arr);
        }

        // Hàm tính tổng các phần tử trong mảng
        function calculateSum($arr) {
            return array_sum($arr);
        }

        // Hàm sắp xếp mảng
        function sortArray(&$arr) {
            sort($arr);
        }

        // Hàm kiểm tra phần tử có trong mảng không
        function checkElementInArray($arr, $element) {
            return in_array($element, $arr);
        }

        // In mảng ban đầu
        echo "<p>Mảng ban đầu: " . implode(', ', $array) . "</p>";

        // In giá trị lớn nhất
        echo "<p>Giá trị lớn nhất trong mảng: " . findMax($array) . "</p>";

        // In giá trị nhỏ nhất
        echo "<p>Giá trị nhỏ nhất trong mảng: " . findMin($array) . "</p>";

        // In tổng các phần tử trong mảng
        echo "<p>Tổng các phần tử trong mảng: " . calculateSum($array) . "</p>";

        // Sắp xếp mảng và in ra
        sortArray($array);
        echo "<p>Mảng sau khi sắp xếp: " . implode(', ', $array) . "</p>";

        // Kiểm tra phần tử có trong mảng không và in ra
        $element = 7;
        if (checkElementInArray($array, $element)) {
            echo "<p class='highlight'>{$element} có trong mảng</p>";
        } else {
            echo "<p>{$element} không có trong mảng</p>";
        }
    ?>
</div>

</body>
</html>
