<?php
// Hàm cộng hai số
function add($a, $b) {
    return $a + $b;
}

// Hàm trừ hai số
function subtract($a, $b) {
    return $a - $b;
}

// Hàm nhân hai số
function multiply($a, $b) {
    return $a * $b;
}

// Hàm chia hai số
function divide($a, $b) {
    if ($b == 0) {
        return "Không thể chia cho 0!";
    }
    return $a / $b;
}
?>
